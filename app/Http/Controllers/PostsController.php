<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{
    public function database()
    {
        $carousel = DB::table('carousel_img')->get();
        $fasiliti = DB::table('fasiliti_masjid')->get();
        $ceramah = DB::table('ceramah_agama')->orderBy('id', 'desc')->get();
        $aktiviti = DB::table('aktiviti_masjid')->orderBy('tarikh_aktiviti', 'desc')->limit(5)->get();
        $makluman = DB::table('makluman_masjid')->orderBy('tarikh_makluman', 'desc')->limit(2)->get();
        $fasiliti_icon = DB::table('images_masjid')->where('type', 'fasiliti')->get();
        $ceramah_icon = DB::table('images_masjid')->where('type', 'ceramah')->get();
        $khairat_icon = DB::table('images_masjid')->where('type', 'khairat')->get();
        $khairat_comment = DB::table('khairat_comment')->get();
        $khairat_borang = DB::table('khairat_borang')->get();

        return view('posts.index', compact('carousel', 'fasiliti', 'ceramah', 'aktiviti', 
            'makluman', 'fasiliti_icon', 'ceramah_icon', 'khairat_icon', 'khairat_comment', 'khairat_borang'));
    }  

    public function database2()
    {
        $nama_masjid = DB::table('nama_masjid')->get();

        return view('layouts.nav', compact('nama_masjid'));
    }
}
