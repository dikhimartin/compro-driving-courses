<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function Home(){
        $page = "Beranda";
        return view('home', compact("page"));
    }
    
    public function AboutUs(){
        $page = "Tentang Kami";
        return view('aboutus', compact("page"));
    }
    
    public function OurTeam(){
        $page = "Team Kami";
        return view('ourteam', compact("page"));
    }
    
    public function Package(){
        $page = "Paket Kursus";
        return view('package', compact("page"));
    }
    
    public function Gallery(){
        $page = "Galeri";
        return view('gallery', compact("page"));
    }
    
    public function ContactUs(){
        $page = "Kontak Kami";
        return view('contactus', compact("page"));
    }

}
