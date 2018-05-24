<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class GridAktivitiController extends Controller
{
    public function database()
    {
        $aktiviti = DB::table('aktiviti_masjid')->orderBy('tarikh_aktiviti', 'desc')->paginate(3);

        return view('posts.gridaktiviti', compact('aktiviti'));
    }
}
