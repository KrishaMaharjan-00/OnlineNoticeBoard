<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfileData()
    {
     // dd("hello");    
     return view('profile.index');
    }
    public function getProfileAboutData()
    {
         return view('profile.about');
    }
    public function getProfileSkillsData()
    {
         return view('profile.skills');
    }
    public function getLaravelSkill()
    {
         return view('profile.laravel');
    }
    public function getAngularSkill()
    {
         return view('profile.angular');
    }
}
