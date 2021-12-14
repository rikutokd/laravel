<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function init(){
        //index.blade表示
        return view('index');
    }
}
