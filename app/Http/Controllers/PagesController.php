<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //passing a variable to a page//
        //$title= 'Welcome to laravel';
        //return view('pages.index', compact('title'));
        return view('pages.index');  
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }
}
