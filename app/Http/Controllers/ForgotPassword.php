<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Mail\Mailable;
use App\Http\Controllers\Controller;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Illuminate\Validation\ValidationException;
use Kreait\Firebase\Database;
use Session;

class ForgotPassword extends Controller
{   

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'cases';
    }
    public function forgotPassword(){


        return view('forgotpassword');
    }


    public function emailSend(Request $request){


        $postRef = $this->database->getReference('users')->getValue();
        $users = collect($postRef);

        $user = $users->where('email', $request->email);

        foreach($user as $use){
            $user_id  =  $use['user_id'];
        }

        $data = array(
            'user_id'      =>  $user_id,
        );

        $email = $request->email;
        $data1 = array('user_id'=> $user_id);


        
        
        Mail::send('passwordReset', $data1, function($message) use ($email) {

            $message->to($email)->subject('LHS - Password Reset Link');
            $message->from('lawyerhiringsystemlhs@gmail.com', 'Lawyer Hiring System - LHS');

            });



        return redirect()->back()->with('success','Password Reset Link Sent Successfully');

    }


    public function changePassword($userId){



        return view('resetpassword')->with([
            'userId' => $userId
        ]);
    }


    public function changePasswordUpdate(Request $request){



        $password = $request->password; 
        $confirmPassword = $request->passwordConfirm; 


        if($password == $confirmPassword){



        $user = app('firebase.auth')->getUser($request->user_id); 

        $changePassword = app('firebase.auth')->changeUserPassword($request->user_id, $password);


        session()->flash('success','Your password has been changed succesfully');


        return redirect()->route('login');

        }


    }

}
