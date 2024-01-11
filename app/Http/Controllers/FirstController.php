<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
   public function index () {
        return view('welcome');
   }
   public function about () {
    return view('about');
}
public function store () {
    return view('store');
}
public function contact () {
    return view('contact');
}
}
