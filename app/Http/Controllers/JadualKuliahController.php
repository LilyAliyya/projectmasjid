<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class JadualKuliahController extends Controller
{
    public function database()
    {
        $kuliah = DB::table('jadual_kuliah')->orderBy('tarikh_kuliah', 'desc')->paginate(20);

        return view('posts.jadualkuliah', compact('kuliah'));
    }
}
