<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class BiroController extends Controller
{
    public function database()
    {
        $biromasjid = DB::table('biro_masjid')->orderBy('coordinate')->paginate(12);
        
        return view('posts.biromasjid', compact('biromasjid'));
    }
}
