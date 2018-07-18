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
        $ceramah = DB::table('ceramah_agama')->orderBy('tarikh_ceramah', 'desc')->get();
        $aktiviti = DB::table('aktiviti_masjid')->orderBy('tarikh_aktiviti', 'desc')->limit(5)->get();
        $makluman = DB::table('makluman_masjid')->orderBy('tarikh_makluman', 'desc')->limit(2)->get();
        $fasiliti_icon = DB::table('web_icon')->where('type', 'fasiliti')->get();
        $ceramah_icon = DB::table('web_icon')->where('type', 'ceramah')->get();
        $kariah_icon = DB::table('web_icon')->where('type', 'kariah')->get();
        $kariah_comment = DB::table('kariah_comment')->get();
        $kariah_borang = DB::table('kariah_borang')->get();

        return view('posts.index', compact('carousel', 'fasiliti', 'ceramah', 'aktiviti', 
            'makluman', 'fasiliti_icon', 'ceramah_icon', 'kariah_icon', 'kariah_comment', 'kariah_borang'));
    }  

    public function database2()
    {
        $nama_masjid = DB::table('nama_masjid')->get();

        return view('layouts.nav', compact('nama_masjid'));
    }
}
