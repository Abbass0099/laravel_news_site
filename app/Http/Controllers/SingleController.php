<?php

namespace App\Http\Controllers;

// use App\Home;
use Illuminate\Http\Request;

class SingleController extends Controller
{

    public function index()
    {
        return view('frontend.single');
    }


}