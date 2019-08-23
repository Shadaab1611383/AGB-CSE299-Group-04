<?php

namespace App\Http\Controllers;
use App\Cproject;
use Illuminate\Http\Request;

class CprojectController extends Controller
{
    public function ShowToUsers(){
        $cproj = Cproject::orderBy('id', 'asc')->get();
        //return $cproj->all();

        return view('front.show-current-project', [
            'cprojects' => $cproj
            ]);
    }
}
