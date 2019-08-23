<?php

namespace App\Http\Controllers;
use App\Aacomplaint;
use Illuminate\Http\Request;

class AacomplaintsController extends Controller
{
    public function FrontAa(){
        $aacmp = Aacomplaint::orderBy('id', 'asc')->get();
        //return $cproj->all();

        return view('front.action-against-complaint', [
            'aacomplaints' => $aacmp
            ]);
    }
}
