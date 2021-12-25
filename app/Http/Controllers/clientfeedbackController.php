<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase\Database;
  
class clientfeedbackController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'feedback';
    }

    public function create()
    {
        return view('/Feedback');
    }

    public function store(Request $request)
    {
        $postData = [
            'message' => $request->message,
            'name' => $request->name,
            'email' => $request->email,
        ];


        $postRef = $this->database->getReference($this->tablename)->push($postData);
        if($postRef)
        {
            return redirect('Feedback')->with('status', 'message added successfully');
        }
        else
        {
            return redirect('Feedback')->with('status', 'message not added');
        }
    }
}
