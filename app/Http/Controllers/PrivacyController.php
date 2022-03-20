<?php

namespace App\Http\Controllers;

// use App\Home;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{

    public function index()
    {
        return view('frontend.privacy');
    }


}