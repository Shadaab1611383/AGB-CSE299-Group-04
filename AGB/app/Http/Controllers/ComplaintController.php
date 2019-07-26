<?php

namespace App\Http\Controllers;

use App\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function showComplainFrom(){

        return view('front.complaint');
    }

    public function saveComplaint(Request $request){

        //return $request->all();

        $complaint = new Complaint();
        $complaint->name = $request->name;
        $complaint->email = $request->email;
        $complaint->phone = $request->phone;
        $complaint->subject = $request->subject;
        $complaint->comment = $request->comment;
        $complaint->save();

        return redirect('/complaint')->with('message', "Complaint has been Received!!");
    }
}
