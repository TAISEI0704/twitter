<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    //
    public function showTimelinePage()
    {
        return view('timeline');
    }
}
