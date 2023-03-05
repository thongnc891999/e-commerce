<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FloatingNewController extends Controller
{
    public function index(){
        return view('client.news');
    }
}
