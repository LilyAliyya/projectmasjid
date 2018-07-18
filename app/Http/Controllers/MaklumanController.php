<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class MaklumanController extends Controller
{
    public function database()
    {
        $makluman = DB::table('makluman_masjid')->orderBy('tarikh_makluman', 'desc')->paginate(5);
        
        return view('posts.makluman', compact('makluman'));

    }
}
