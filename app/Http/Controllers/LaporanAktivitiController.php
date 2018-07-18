<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class LaporanAktivitiController extends Controller
{
    public function database()
    {
        $laporan = DB::table('laporan_aktiviti')->orderBy('tarikh_laporan', 'desc')->paginate(5);

        return view('posts.laporanaktiviti', compact('laporan'));
    }
}
