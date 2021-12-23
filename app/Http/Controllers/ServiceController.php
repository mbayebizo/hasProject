<?php

namespace App\Http\Controllers;

use DB;

class ServiceController extends Controller
{
    public function index()
    {
        $sn = DB::table('depart_conteneurs')->where('pays','sn')->latest('id')->first();
        $ml = DB::table('depart_conteneurs')->where('pays','ml')->latest('id')->first();
        $ci = DB::table('depart_conteneurs')->where('pays','ci')->latest('id')->first();
        return view('pages.services')->with('sn',$sn)->with('ml',$ml)->with('ci',$ci);
    }
    public function service0()
    {
        $sn = DB::table('depart_conteneurs')->where('pays','sn')->latest('id')->first();
        $ml = DB::table('depart_conteneurs')->where('pays','ml')->latest('id')->first();
        $ci = DB::table('depart_conteneurs')->where('pays','ci')->latest('id')->first();
        return view('pages.groupage')->with('sn',$sn)->with('ml',$ml)->with('ci',$ci);
    }
    public function service1()
    {
        $sn = DB::table('depart_conteneurs')->where('pays','sn')->latest('id')->first();
        $ml = DB::table('depart_conteneurs')->where('pays','ml')->latest('id')->first();
        $ci = DB::table('depart_conteneurs')->where('pays','ci')->latest('id')->first();
        return view('pages.miseendispo')->with('sn',$sn)->with('ml',$ml)->with('ci',$ci);
    }
    public function service2()
    {
        $sn = DB::table('depart_conteneurs')->where('pays','sn')->latest('id')->first();
        $ml = DB::table('depart_conteneurs')->where('pays','ml')->latest('id')->first();
        $ci = DB::table('depart_conteneurs')->where('pays','ci')->latest('id')->first();
        return view('pages.meublestocke')->with('sn',$sn)->with('ml',$ml)->with('ci',$ci);
    }
    public function service3()
    {
        $sn = DB::table('depart_conteneurs')->where('pays','sn')->latest('id')->first();
        $ml = DB::table('depart_conteneurs')->where('pays','ml')->latest('id')->first();
        $ci = DB::table('depart_conteneurs')->where('pays','ci')->latest('id')->first();
        return view('pages.vehicule')->with('sn',$sn)->with('ml',$ml)->with('ci',$ci);
    }
}
