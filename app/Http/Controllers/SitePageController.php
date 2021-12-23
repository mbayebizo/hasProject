<?php

namespace App\Http\Controllers;

use DB;

class SitePageController extends Controller
{

    public function __index()
    {
        return view('home');
    }
}
