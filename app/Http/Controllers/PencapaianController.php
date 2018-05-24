<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PencapaianController extends Controller
{
    public function database()
    {
        $pencapaian = DB::table('pencapaian_masjid')->get();

        return view('posts.pencapaian', compact('pencapaian'));
    }
}
