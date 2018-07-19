<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class VideoMasjidController extends Controller
{
    public function database()
    {
        $video = DB::table('video_masjid')->orderBy('tarikh_video', 'desc')->paginate(10);

        return view('posts.videomasjid', compact('video'));
    }
}
