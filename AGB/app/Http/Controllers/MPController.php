<?php

namespace App\Http\Controllers;
use App\MP;
use Illuminate\Http\Request;


class MPController extends Controller
{
    public function FrontMp(){
        $mp = MP::orderBy('id', 'asc')->get();
        //return $cproj->all();

        return view('front.mp-list', [
            'members' => $mp
            ]);
    }
}
