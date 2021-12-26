<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class post_legal_caseController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'cases';
    }

    public function createUser($user)
    {

        $postData = [
            'address' => $user->address,
            'city' => $user->city,
            'email' => $user->email,
            'experience' => "",
            'lawyerId' => "",
            'lawyerType' => $user->lawyerType,
            'mobile' => $user->mobile,
            'name' => $user->name,
            'password' => $user->password,
            'profession' => $user->profession,
        ];

        $postRef = $this->database->getReference('users/UserId')->push($postData);

    }


 

    public function addLawyer($id)
    {

        $postRef = $this->database->getReference('users')->getValue();

    }

    public function lawyerProfile()
    {

        $postRef = $this->database->getReference('users')->getValue();

        $auth = $this->database->getReference('users/'.Auth::id())->getValue();




        return view('lawyer.profile', compact('auth'));

    }

    public function lawyerDashboard()
    {

        $postRef = $this->database->getReference('applications')->getValue();

        $applications = collect($postRef);

        $applications = $applications->where('lawyer_id', Auth::id());

        $app = [];
        foreach ($applications as $application) {
            $app[] = $application['case_id'];
        }

        $postRef = $this->database->getReference('cases')->getValue();

        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;

            }
        }
        $cases = collect($cases);

        $appliedCases = $cases->whereIn('case_id', $app)->where('isopen', 'true')->count();

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;

            }
        }
        $cases = collect($cases);
        $hiredCases = $cases->where('lawyer_id', Auth::id())->count();

        $postRef = $this->database->getReference('article')->getValue();

        $articles = collect($postRef);

        $articles = $articles->where('lawyer_id', Auth::id())->count();
        return view('lawyer.dashboard', compact('appliedCases', 'hiredCases', 'articles'));
    }

    public function appliedCases()
    {

        $postRef = $this->database->getReference('applications')->getValue();

        $applications = collect($postRef);

        $applications = $applications->where('lawyer_id', Auth::id());

        $app = [];
        foreach ($applications as $application) {
            $app[] = $application['case_id'];
        }

        $postRef = $this->database->getReference('cases')->getValue();

        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;

            }
        }
        $cases = collect($cases);

        $cases = $cases->whereIn('case_id', $app)->where('isopen', 'true');

        return view('lawyer.appliedCases', compact('cases'));

    }

    public function hiredCases()
    {

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;

            }
        }
        $cases = collect($cases);
        $cases = $cases->where('lawyer_id', Auth::id())->where('isopen', 'fasle');

        return view('lawyer.hiredCases', compact('cases'));

    }


    public function ongoingLawyerCases()
    {

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;

            }
        }
        $cases = collect($cases);
        $cases = $cases->where('lawyer_id', Auth::id())->where('isopen', 'ongoing');
        return view('lawyer.ongoingCases', compact('cases'));

    }

    public function addArticle(Request $request)
    {

        $lawyer = $this->database->getReference('users/' . Auth::id())->getValue();

        $postData = [
            'article_id' => '',
            'lawyer_id' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
            'lawyer_name' => $lawyer['name'],
        ];

        $postRef = $this->database->getReference('article')->push($postData);

        $key = $postRef->getKey();

        $postRef->getChild('article_id')->set($key);

        if ($postRef) {
            return redirect()->back()->with('status', 'Article Posted Successfully');
        } else {
            return redirect()->back()->with('status', 'Failed to Post the Article , Try Again');
        }

    }

    public function deleteArticle($id)
    {

        $article = $this->database->getReference('article/' . $id)->remove();

        return redirect()->back()->with('status', 'Article Removed');

    }




    public function searchCategory($lawyerType){
        $postRef = $this->database->getReference('users')->getValue();
        $users = collect($postRef);
        $lawyers = $users->where('profession', '1');
        $lawyers = $lawyers->where('lawyerType', $lawyerType);
       


        return view('searchedLawyers', compact('lawyers'));


    }

    public function search(Request $request)
    {

        $postRef = $this->database->getReference('users')->getValue();

        $users = collect($postRef);

        $city = $request->city;
        $type = $request->type;
        $court = $request->court;
        $lawyers = $users->where('profession', '1');
        if ($request->city) {
            $lawyers = $lawyers->where('city', $request->city);
        }
        if ($request->type) {
            $lawyers = $lawyers->where('lawyerType', $request->type);
        }
        if ($request->court) {
            $lawyers = $lawyers->where('courtType', $request->court);
        }

        return view('searchedLawyers', compact('lawyers', 'city', 'type', 'court'));

    }

    public function postcase()
    {
        return view('/PostLegalCase');
    }

    public function add(Request $request)
    {

        // $key = '-MpWrwsNI0EIjPDoBvOx';
        // $postRef = $this->database->getReference('cases'. $key)->getChild('isopen')->set('close');

// $case = $cases->where('title', 'FIR on Sheikh');

// return view('awein', compact('cases'));

// foreach($cases as $case){

// dd($case['title']);

// }

        $postData = [
            'case_id' => '',
            'lawyer_id' => '',
            'user_id' => Auth::id(),
            'applications' => 0,
            'isopen' => 'true',
            'title' => $request->title,
            'city' => $request->city,
            'budget' => $request->budget,
            'problem' => $request->problem,
            'court' => $request->court,
            'email' => $request->email,
            'lawyer_type' => $request->lawyer_type,

        ];
        $postRef = $this->database->getReference('cases')->push($postData);
        $key = $postRef->getKey();
        $postRef->getChild('case_id')->set($key);
        // $postRef = $this->database->getReference('applications')->push($postData);

        if ($postRef) {
            return redirect('PostLegalCase')->with('status', 'Case added successfully');
        } else {
            return redirect('PostLegalCase')->with('status', 'Case not added');
        }
    }

    public function articles()
    {

//         $postRef = $this->database->getReference('users')->OrderByKey()->EqualTo('DWzN4QpbWzQdTv0caFlDcu187dp2');
// dd($postRef);
//         $users = collect($postRef);
//         $user = $users->where('id', '49tkfi8dhxQTwNecDC3gV4iI8Sv1');

// dd($user);

        $postRef = $this->database->getReference('article')->getValue();

        $articles = collect($postRef);

        return view('Articles', compact('articles'));

    }

    public function myCases()
    {

// $current = Carbon::now();
// $current->toDateTimeString();
//         dd($current);

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;

            }
        }
        $cases = collect($cases);
        $cases = $cases->where('user_id', Auth::id())->where('isopen', 'true');
        return view('Profile/OpenedCases', compact('cases'));

    }


    public function ongoingCases()
    {

// $current = Carbon::now();
// $current->toDateTimeString();
//         dd($current);

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;

            }
        }
        $cases = collect($cases);
        $cases = $cases->where('user_id', Auth::id())->where('isopen', 'ongoing');
        return view('Profile/OngoingCases', compact('cases'));

    }

    public function closedCases()
    {

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;

            }
        }
        $cases = collect($cases);
        $cases = $cases->where('user_id', Auth::id())->where('isopen', 'false');
        return view('Profile/ClosedCases', compact('cases'));

    }

    function case ($id) {
        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;

            }
        }
        $cases = collect($cases);
        $postRef = $this->database->getReference('applications')->getValue();

        $applications = collect($postRef);

        $applications = $applications->where('case_id', $id);

        $case = $cases->where('case_id', $id);
        foreach ($case as $cas) {

            $case = $cas;
        }

        $user = $this->database->getReference('users/' . Auth::id())->getValue();
        if ($user['profession'] == 0) {

            return view('Profile.case', compact('case', 'applications'));
        } else {
            return view('lawyer.case', compact('case', 'applications'));

        }

    }

    public function profile()
    {

        $postRef = $this->database->getReference('users')->getValue();

        $users = collect($postRef);
        $auth = $users->where('user_id', Auth::id());
        foreach ($auth as $aut) {

            $auth = $aut;
        }
        return view('Profile.Profile', compact('auth'));
    }

    public function dashboard()
    {

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;

            }
        }
        $cases = collect($cases);

        $cases = $cases->where('user_id', Auth::id());

        $openedCases = $cases->where('isopen', 'true')->count();

        $closedCases = $cases->where('isopen', 'false')->count();

        $applications = $cases->sum('applications');

        return view('Profile.dashboard', compact('openedCases', 'closedCases', 'applications'));

    }

    public function messages($title, $user_id)
    {
        $case = $this->database->getReference('cases/' . $user_id . '/' . $title)->getValue();
        $postRef = $this->database->getReference('messages/' . $title)->getValue();
        $user = $this->database->getReference('users/' . Auth::id())->getValue();
        $messages = collect($postRef);







        if ($user['profession'] == 0) {

            return view('Profile.messages', compact('case', 'messages', 'user'));

        } else {

            return view('lawyer.messages', compact('case', 'messages', 'user'));
        }

    }




   public function sendFile(Request $request)
    {

        $user = $this->database->getReference('users/' . Auth::id())->getValue();

        $now = Carbon::now()->toDateTimeString();


        if($request->hasFile('fileUpload')){

            $fileName = time().'.'.$request->fileUpload->extension();  
            $request->fileUpload->move(public_path('uploads'), $fileName);

        }



        $postData = [
            'messageFile' => 'true',
            'messageText' => $fileName,
            'messageTime' => $now,
            'messageUser' => $user['email'],

        ];




        $postRef = $this->database->getReference('messages/' . $request->title)->push($postData);

        return redirect()->back()->with('status', 'Message Sent');
    }



    public function sendMessage(Request $request)
    {

        $user = $this->database->getReference('users/' . Auth::id())->getValue();

        $now = Carbon::now()->toDateTimeString();

        $postData = [
            'messageText' => $request->message,
            'messageTime' => $now,
            'messageUser' => $user['email'],

        ];

        $postRef = $this->database->getReference('messages/' . $request->title)->push($postData);

        return redirect()->back()->with('status', 'Message Sent');
    }

    public function applyForCases()
    {

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;
                
            }
        }
        $cases = collect($cases);
        
        $cases = $cases->where('isopen', 'true');
        
        return view('lawyer.applyForCases', compact('cases'));
    }

    public function apply(Request $request)
    {
        $lawyer = $this->database->getReference('users/' . Auth::id())->getValue();

        // $cases = [];
        // foreach($postRef as $post){
        //     foreach($post as $pos){
        //         $cases[] = $pos;

        //     }
        // }
        // $cases = collect($cases);

        // $case = $cases->where('case_id', $id);

        $postData = [
            'budget' => $request->budget,
            'application_id' => '',
            'lawyer_id' => Auth::id(),
            'case_id' => $request->case_id,
            'lawyer_type' => $lawyer['lawyerType'],
            'lawyer_name' => $lawyer['name'],
        ];

        $postRef = $this->database->getReference('applications')->push($postData);

        $key = $postRef->getKey();

        $postRef->getChild('application_id')->set($key);

        $case = $this->database->getReference('cases/' . $request->user_id . '/' . $request->title)->getValue();

        $applications = $case['applications'] + 1;

        $case = $this->database->getReference('cases/' . $request->user_id . '/' . $request->title)->getChild('applications')->set($applications);

        return redirect()->back()->with('status', 'Applied for Case Successfully');
    }

    public function myArticles()
    {

        $postRef = $this->database->getReference('article')->getValue();

        $articles = collect($postRef);
        $articles = $articles->where('lawyer_id', Auth::id());

        return view('lawyer.articles', compact('articles'));

    }

    //Start Admin Functions

    public function adminCasesOpened()
    {

        $postRef = $this->database->getReference('cases')->getValue();

        $cases = [];
        foreach ($postRef as $post) {
            foreach ($post as $pos) {
                $cases[] = $pos;

            }
        }
        $cases = collect($cases);

        dd($cases);

        return view('admin.pages.orders', compact('cases'));

    }

    //End Admin Functions

}
