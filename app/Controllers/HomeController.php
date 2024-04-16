<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function homepage()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contactus');
    }
    public function features()
    {
        return view('features');
    }
    public function team()
    {
        return view('team');
    }
    public function testimonials()
    {
        return view('testimonials');
    }
    public function faq()
    {
        return view('faq');
    }
}