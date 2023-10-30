<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function Index(){
        return view('about');
    }
    public function createindex(){
            return view('create');
    }
    public function contactindex(){
        return view('contact');
    }
}
