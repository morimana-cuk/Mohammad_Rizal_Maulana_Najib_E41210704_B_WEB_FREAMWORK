<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Controllers\Controler;

class HomeController extends Controller
{
    public function index(){
        return view('Frontend.layout.home');
    }
}
