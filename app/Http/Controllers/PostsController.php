<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{
    public function index()    
    {        
         return view('posts.index');    
    }

    public function database()
    {
        $carousel = DB::table('carousel_img')->get();
        $fasiliti = DB::table('fasiliti_masjid')->get();
        $ceramah = DB::table('ceramah_agama')->orderBy('id', 'desc')->get();
        $aktiviti = DB::table('aktiviti_masjid')->orderBy('id', 'desc')->get();
        $makluman = DB::table('makluman_masjid')->orderBy('id', 'desc')->get();
        $fasiliti_icon = DB::table('images_masjid')->where('type', 'fasiliti')->get();
        $ceramah_icon = DB::table('images_masjid')->where('type', 'ceramah')->get();
        $khairat_icon = DB::table('images_masjid')->where('type', 'khairat')->get();
        $khairat_comment = DB::table('khairat_comment')->get();
        $khairat_borang = DB::table('khairat_borang')->get();

        return view('posts.index', compact('carousel', 'fasiliti', 'ceramah', 'aktiviti', 
            'makluman', 'fasiliti_icon', 'ceramah_icon', 'khairat_icon', 'khairat_comment', 'khairat_borang'));
    }

    

    
}
