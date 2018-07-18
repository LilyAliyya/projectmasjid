<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class PencapaianController extends Controller
{
    public function database()
    {
        $pencapaian = DB::table('pencapaian_masjid')->paginate(5);

        return view('posts.pencapaian', compact('pencapaian'));
    }
}
