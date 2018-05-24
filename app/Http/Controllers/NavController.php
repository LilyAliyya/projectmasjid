<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NavController extends Controller
{
    public function database()
    {
        $nama_masjid = DB::table('nama_masjid')->get();

        return view('layouts.nav', compact('nama_masjid'));
    }
}
