<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function Home(){
        return view('home');
    }

    public function AboutUs(){
        return view('welcome');
    }

    public function OurTeam(){
        return view('welcome');
    }

    public function Package(){
        return view('welcome');
    }
    
    public function Gallery(){
        return view('welcome');
    }

    public function ContactUs(){
        return view('welcome');
    }

}
