<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Kreait\Firebase\Database;
use Carbon\Carbon;
use Stripe;

class hireController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function hireLawyerNow(Request $request){


        $uId = Auth::id();

        $case = $this->database->getReference('cases/'.$uId.'/'.$request->case_id)->getValue();
        $lawyer = $this->database->getReference('users/'.$request->lawyer_id)->getValue();
        $user = $this->database->getReference('users/'.$uId)->getValue();


         $customer = Stripe::customers()->create([
             'email' => $user['email']
          ]);




                try {

                    $token = Stripe::tokens()->create([
                        'card' => [
                            'number'    => $request->card_num,
                            'exp_month' => $request->card_mm,
                            'cvc'       => $request->card_cvc,
                            'exp_year'  => $request->card_yy,
                        ],
                    ]); 


                    if(!isset($token['id'])){
                        return redirect()->back()->with([
                                'message' => 'We are not able to proccess the Payment, Please check card information.'
                                        ]); 
                    }








                $card = Stripe::cards()->create($customer['id'], $token['id']);



                $charge = Stripe::charges()->create([
                    'customer' => $customer['id'],
                    'currency' => 'PKR',
                    'amount'   => $request->budget,
                ]);


                if($charge['status'] == 'succeeded'){
                        
                    // redirect to Thank You, Order Confirmation    
                    // CLOSE CASE, add Lawyer ID, make Orders Entry.




               
                    $postData = [
                        'case_id' => $case['case_id'],
                        'lawyer_id' => $request->lawyer_id,
                        'lawyer_name' => $lawyer['name'],

                        'user_id' => Auth::id(),
                        'isopen' => 'ongoing',
                        'hiredlawyer' => 'true'

                        
                    ];
                  $postRef = $this->database->getReference('cases/'.Auth::id().'/'.$case['title'])->update($postData);





                    return redirect()->route('case', $case['case_id'])->with([
                                'message' => 'You order has been successfully placed.',
               
                            ]); 
                
                }

                else {

            return redirect()->route('case', $case['case_id'])->with([
                'message' => 'We are not able to proccess the Payment, Please check card information.'
            ]); 



                            }













                } catch (Exception $e){



                    return redirect()->route('case', $case['title'])->with([
                                            'message' => 'We are not able to proccess the Payment, Please check card information.'
                                        ]); 
                }

    }



    public function closeCase($title){


        $postData = [
            'isopen' => 'false',

            
        ];
      $postRef = $this->database->getReference('cases/'.Auth::id().'/'.$title)->update($postData);

      return redirect()->back();



    }
   
    public function removeApp($app_id){

        $postRef = $this->database->getReference('applications/'.$app_id)->remove();

        return redirect()->back();



    }
    public function hireLaywer($lawyerId, $caseId, $app_id){

        $uId = Auth::id();

        $case = $this->database->getReference('cases/'.$uId.'/'.$caseId)->getValue();
        $lawyer = $this->database->getReference('users/'.$lawyerId)->getValue();
        $app = $this->database->getReference('applications/'.$app_id)->getValue();


        return view('Profile.hireLawyer')->with([
            'case' => $case, 
            'lawyer' => $lawyer,
            'app' => $app,
        ]);
    }
}
