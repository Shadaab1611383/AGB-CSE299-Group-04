<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return redirect('/cproj')->with('message', "Complaint has been Received!!");
    }
}
