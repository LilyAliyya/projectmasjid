<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiroController extends Controller
{
    public function index()    
    {        
         return view('posts.biromasjid');    
    }
}
