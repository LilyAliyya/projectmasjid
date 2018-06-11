<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class VideoKhutbahController extends Controller
{
    public function database()
    {
        $khutbah = DB::table('video_khutbah')->orderBy('tarikh_khutbah', 'desc')->paginate(2);

        return view('posts.videokhutbah', compact('khutbah'));
    }
}
