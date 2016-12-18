<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $company = 'Nikitos';
        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }
}