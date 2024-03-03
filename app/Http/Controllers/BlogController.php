<?php

namespace App\Http\Controllers;

use App\Models\portofolio;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home'
        ]);
    }

    public function education()
    {
        return view('education', [
            'title' => 'Education'
        ]);
    }

    public function portofolio()
    {
        return view('portofolio', [
            'title' => 'Portofolio',
            "portofolios" => Portofolio::all()
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact',
            'active' => 'contact'
        ]);
    }
}