<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function Home(){
        return view('home');
    }

    public function AboutUs(){
        return view('aboutus');
    }

    public function OurTeam(){
        return view('ourteam');
    }

    public function Package(){
        return view('package');
    }
    
    public function Gallery(){
        return view('gallery');
    }

    public function ContactUs(){
        return view('contactus');
    }

}
