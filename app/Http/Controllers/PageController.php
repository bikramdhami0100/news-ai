<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }
    public function news()
    {
        return view('pages.index');
    }
    public function business()
    {
        return view('pages.business');
    }
    public function life_style()
    {
        return view('pages.life_style');
    }
    public function entertainment()
    {
        return view('pages.entertainment');
    }
    public function opinion()
    {
        return view('pages.opinion');
    }
    public function technology()
    {
        return view('pages.technology');
    }
    public function sports()
    {
        return view('pages.sports');
    }

}
