<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class JawatankuasaMasjidController extends Controller
{
    public function database()
    {
        $jawatankuasa = DB::table('jawatankuasa_masjid')->orderBy('coordinate')->paginate(12);

        return view('posts.jawatankuasa', compact('jawatankuasa'));
    }
}
