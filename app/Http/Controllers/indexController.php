<?php

namespace App\Http\Controllers;

class indexController extends Controller
{
    public function index(){
        return view('home');
    }

    public function start(){
        return view('start');
    }

}
