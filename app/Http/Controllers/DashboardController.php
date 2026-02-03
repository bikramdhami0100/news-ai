<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.index');
    }
    
    public function upload_news()
    {
        return view('dashboard.pages.upload_news');
    }
}
