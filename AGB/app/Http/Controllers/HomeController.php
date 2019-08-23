<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cproject;
use App\AAComplaint;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.notification.notification');
    }

    public function showCproj(){

        return view('admin.recent_activity.recent_activity');
    }  

    public function saveCproj(Request $request){

        //return $request->all();

        $cproj = new Cproject();
        $cproj->current_project = $request->action;
        $cproj->save();

        return redirect('/cproj')->with('message', "Project has been saved Successfully!!");
    }

    public function saveAAcomplaint(Request $request){

        $aacmp = new Aacomplaint();
        $aacmp->Complaint = $request->cmpname;
        $aacmp->ActionTaken = $request->action2;
        $aacmp->save();

        return redirect('/aacomplaint')->with('message', "Project has been saved Successfully!!");
    }



    
}
