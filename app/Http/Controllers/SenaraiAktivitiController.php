<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class SenaraiAktivitiController extends Controller
{
    public function database()
    {
        //$aktiviti = DB::table('aktiviti_masjid')->whereMonth('tarikh_aktiviti', '05')->orderBy('tarikh_aktiviti', 'desc')->get();

        $aktiviti = DB::table('aktiviti_masjid')->orderBy('tarikh_aktiviti', 'desc')->paginate(2);

        return view('posts.senaraiaktiviti', compact('aktiviti'));
    }
}
