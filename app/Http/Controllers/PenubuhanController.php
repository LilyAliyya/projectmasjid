<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PenubuhanController extends Controller
{
    public function database()
    {
        $penubuhan = DB::table('sejarah_penubuhan')->get();

        return view('posts.penubuhan', compact('penubuhan'));
    }
}
