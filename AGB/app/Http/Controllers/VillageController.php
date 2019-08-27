<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Village;

class VillageController extends Controller
{
    public function FrontArea(){
        $ar_seat = Village::orderBy('id', 'asc')->get();
        //return $cproj->all();

        return view('front.area-list', [
            'arseats' => $ar_seat
            ]);
    }
}
