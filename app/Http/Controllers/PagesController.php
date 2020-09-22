<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function hotel(){
        return view('pages.hotel');
    }
    public function vehicles(){
        return view('pages.vehicles');
    }
    public function employees(){
        return view('pages.employees');
    }
}
