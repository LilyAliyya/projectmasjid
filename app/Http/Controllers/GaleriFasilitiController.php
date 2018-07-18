<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class GaleriFasilitiController extends Controller
{
    public function database()
    {
        $galerifasiliti = DB::table('galeri_fasiliti')->paginate(10);

        return view('posts.galerifasiliti', compact('galerifasiliti'));
    }
}
