<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class GaleriMasjidController extends Controller
{
    public function database()
    {
        $galerimasjid = DB::table('galeri_masjid')->paginate(10);

        return view('posts.galerimasjid', compact('galerimasjid'));
    }
}
