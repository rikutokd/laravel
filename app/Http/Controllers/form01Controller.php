<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form01Controller extends Controller
{
    public function init(){

        //form01.blade表示
        return view('form01');
    }
}
