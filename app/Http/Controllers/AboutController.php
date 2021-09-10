<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function ShowAboutContent()
    {
        return view('about/abc');
    }
    public function GetAllProjects()
    {
        return view('about/doc');
    }
}
