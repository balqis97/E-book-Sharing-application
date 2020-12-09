<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function about(){
        return view('subview.about');
    }


    public function list () {
        return view('subview.list');
    }
}

