<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // For Frontend Home Page
    public function index(){
        return view('frontend.index');
    }

    // For Contact Page
    public function contact(){
        return view('frontend.contact');
    }

    public function schpRegistration(){
        return view('frontend.scholarship-registration');
    }
}
