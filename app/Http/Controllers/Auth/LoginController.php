<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Auth\SignInResult\SignInResult;
use Kreait\Firebase\Exception\FirebaseException;
use Illuminate\Validation\ValidationException;

use Auth;
use Session;
use App\Models\User;
use Kreait\Firebase\Database;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $auth;
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct(FirebaseAuth $auth, Database $database) {

       $this->middleware('guest')->except('logout');
       $this->auth = $auth;
         $this->database = $database;

    }
 protected function login(Request $request) {
       try {
          $signInResult = $this->auth->signInWithEmailAndPassword($request['email'], $request['password']);
          $user = new User($signInResult->data());

          //uid Session
          $loginuid = $signInResult->firebaseUserId();
          Session::put('uid',$loginuid);

          $result = Auth::login($user);
          session()->flash('message','');


          // dd($loginuid);
         
            $postRef = $this->database->getReference('users/'.$loginuid)->getValue();


            if($postRef['profession'] == 0) {
               // User Redirect 
               return redirect($this->redirectPath());

            }
            else if($postRef['profession'] == 1){
               // Lawyer Redirect

               return redirect()->route('lawyerDashboard'); 

            }
            else {
               // Admin Redirect
               return redirect()->route('adminDashboard');
            }

         
      //     return redirect($this->redirectPath());
     


       } catch (FirebaseException $e) {
         session()->flash('message','Error');
          throw ValidationException::withMessages([$this->username() => [trans('auth.failed')],]);
      
       }
    }
    public function username() {
       return 'email';
    }
 public function handleCallback(Request $request, $provider) {
       $socialTokenId = $request->input('social-login-tokenId', '');
       try {
          $verifiedIdToken = $this->auth->verifyIdToken($socialTokenId);
          $user = new User();
          $user->displayName = $verifiedIdToken->getClaim('name');
          $user->email = $verifiedIdToken->getClaim('email');
          $user->localId = $verifiedIdToken->getClaim('user_id');
          Auth::login($user);


          return redirect($this->redirectPath());
       } catch (\InvalidArgumentException $e) {
          return redirect()->route('login');
       } catch (InvalidToken $e) {
          return redirect()->route('login');
       }
    }
 }
