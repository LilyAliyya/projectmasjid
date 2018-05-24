<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BiroController extends Controller
{
    public function database()
    {
        $biromasjid = DB::table('biro_masjid')->orderBy('coordinate')->get();
        
        return view('posts.biromasjid', compact('biromasjid'));
    }
}
