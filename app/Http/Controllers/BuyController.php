<?php

namespace App\Http\Controllers;

use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    //
    public function store(){
        return view('products/congrats');
    }
}
