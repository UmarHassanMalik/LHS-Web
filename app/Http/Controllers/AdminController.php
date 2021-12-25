<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




use Auth;
use Kreait\Firebase\Database;
use Stripe;

class AdminController extends Controller
{






    public function __construct(Database $database)
    {
        $this->database = $database;

    }


    public function getUsers(){


        $users = $this->database->getReference('users/'.$id)->getValue();
     
            foreach($users as $key => $user){
                if($user['profession'] == 1){
                    unset($users[$key]);
                }
            }


        return $users->count();
    }









    public function caseDelete($userId, $caseTitle){
        $postRef = $this->database->getReference('cases/'.$userId.'/'.$caseTitle)->remove();
        
        return redirect()->back()->with([
            'success' => 'Case has been removed'
        ]);
    }



  public function casesOpened(){

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach($postRef as $post){
            foreach($post as $pos){
                $cases[] = $pos;
        
            }
        }
        $cases = collect($cases);
        

        foreach($cases as $case){


            $client =  $this->database->getReference('users/'.$case['user_id'])->getValue();


 
            
        }

        $cases = $cases->where('isopen', 'true');
     //   $cases = $cases->where('isopen', 'false');


        return view('admin.pages.cases')->with([
            'cases' => $cases
        ]);
    }



    public function casesOnGoing(){

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach($postRef as $post){
            foreach($post as $pos){
                $cases[] = $pos;
        
            }
        }




        

        foreach($cases as $key => $case){


            $client =  $this->database->getReference('users/'.$case['user_id'])->getValue();



        }


        // dd($cases[0]);

        $cases = collect($cases);
        
        // $cases = $cases->where('isopen', 'true');
        $cases = $cases->where('isopen', 'ongoing');


        // dd($cases);

        return view('admin.pages.casesongoing')->with([
            'cases' => $cases
        ]);
    }



    public function casesClosed(){

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach($postRef as $post){
            foreach($post as $pos){
                $cases[] = $pos;
        
            }
        }




        

        foreach($cases as $key => $case){


            $client =  $this->database->getReference('users/'.$case['user_id'])->getValue();


          //  $case['clientName'] = $client['name'];


            // $cases[$key]->push('clientName', $client['name']);
            // $case->push('clientName', $client['name']);

           // array_push($case, $client['name']);

            // dd($case);
        }


        // dd($cases[0]);

        $cases = collect($cases);
        
        // $cases = $cases->where('isopen', 'true');
        $cases = $cases->where('isopen', 'false');


        // dd($cases);

        return view('admin.pages.casesclosed')->with([
            'cases' => $cases
        ]);
    }



    public function casesAll(){

        $postRef = $this->database->getReference('cases')->getValue();
        $cases = [];
        foreach($postRef as $post){
            foreach($post as $pos){
                $cases[] = $pos;
        
            }
        }
        $cases = collect($cases);
        

        foreach($cases as $case){


            $client =  $this->database->getReference('users/'.$case['user_id'])->getValue();

        }

        // $cases = $cases->where('isopen', 'true');
        // $cases = $cases->where('isopen', 'false');


        return view('admin.pages.cases')->with([
            'cases' => $cases
        ]);
    }






    public function lawyerEditView($id){
        $lawyer =  $this->database->getReference('users/'.$id)->getValue();

        return view('admin.pages.lawyeredit')->with([
            'lawyer' => $lawyer
        ]);
    }




    public function userEditView($id){
        $user =  $this->database->getReference('users/'.$id)->getValue();

        return view('admin.pages.useredit')->with([
            'user' => $user
        ]);
    }


  public function lawyerEdit(Request $request){


       $postData = [
                     'user_id' => $request->user_id, 
                     'email' => $request->email,
                     'name' => $request->name, 
                     'mobile' => $request->mobile,
                     'city' => $request->city,
                     'address'=> $request->address,
                     'experience' => $request->experience, 
                     'lawyerType' => $request->lawyerType, 
                                      
                 ];


                  $postRef = $this->database->getReference('users/'.$request->user_id)->update($postData);


        return redirect()->back()->with([
            'success' => 'Lawyer has been edited'
        ]);

    }



    public function userEdit(Request $request){



       $postData = [
                     'user_id' => $request->user_id, 
                     'email' => $request->email,
                     'name' => $request->name, 
                     'mobile' => $request->mobile,
                     'city' => $request->city,
                     'address'=> $request->address,
                                      
                 ];


                  $postRef = $this->database->getReference('users/'.$request->user_id)->update($postData);


        return redirect()->back()->with([
            'success' => 'User has been edited'
        ]);

    }

    public function dashboard(){
        




        $users = $this->database->getReference('users')->getValue();



        foreach($users as $key => $user){
            if($user['profession'] == 1 || $user['profession'] == 2 ){
                unset($users[$key]);
            }
        }


        return view('admin.pages.users')->with([
            'users' => $users
        ]);
    }


    public function lawyersView(){
        
        $users = $this->database->getReference('users')->getValue();



        foreach($users as $key => $user){
            if($user['profession'] == 0 || $user['profession'] == 2 ){
                unset($users[$key]);
            }
        }


        return view('admin.pages.lawyers')->with([
            'users' => $users
        ]);
    }



    public function articleView(){
        
        $article = $this->database->getReference('article')->getValue();



        return view('admin.pages.article')->with([
            'article' => $article
        ]);
    }




    public function feedbackView(){
        
        $feedback = $this->database->getReference('feedback')->getValue();




        return view('admin.pages.feedback')->with([
            'feedback' => $feedback
        ]);
    }


    public function feedbackDelete($feedbackId){
        $feedback = $this->database->getReference('feedback/'.$feedbackId)->remove();

        return redirect()->back()->with([
            'success' => 'Feeback has been removed'
        ]);
    }


    public function userDelete($userId){
        

        $user = $this->database->getReference('users/'.$userId)->remove();

        return redirect()->back()->with([
            'success' => 'User has been removed'
        ]);
    }


    public function lawyerDelete($lawyerId){
        $lawyer = $this->database->getReference('users/'.$lawyerId)->remove();

        return redirect()->back()->with([
            'success' => 'Lawyer has been removed'
        ]);
    }

    public function articleDelete($articleId){
        $article = $this->database->getReference('article/'.$articleId)->remove();

        return redirect()->back()->with([
            'success' => 'Article has been removed'
        ]);
    }



}
