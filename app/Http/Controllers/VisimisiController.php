<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VisimisiController extends Controller
{ 
    public function database()
    {
        $visimisi = DB::table('visi_misi')->get();

        return view('posts.visimisi', compact('visimisi'));
    }
}
