<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BaseController extends Controller
{
    public function home(){
        return view('home');
    }
}
