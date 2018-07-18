<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class KuliahHarianController extends Controller
{
    public function database()
    {
        $kuliah = DB::table('kuliah_harian')->orderBy('tarikh_kuliah', 'desc')->paginate(10);

        return view('posts.kuliahharian', compact('kuliah'));
    }
}
