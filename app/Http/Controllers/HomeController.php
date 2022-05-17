<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{

    public function root()
    {
        return view('home');
    }

    public function homepage()
    {

        return view('home');

    }
    public function whatweofferclient()
    {

        return view('whatweofferclient');

    }
    public function whatweofferartist()
    {

        return view('whatweofferartist');

    }
    public function whoweare()
    {

        return view('whoweare');

    }
    public function ourartists()
    {

        return view('ourartists');

    }
    public function artistsingle()
    {

        return view('artistsingle');

    }
    public function joinus()
    {

        return view('joinus');

    }
    public function contact()
    {

        return view('contact');

    }
    public function bookartist()
    {

        return view('bookartist');

    }
    public function personal()
    {

        return view('personal');

    }



}
