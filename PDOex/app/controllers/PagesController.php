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
        $company = 'Nexus-United';
        return view('about',compact('company'));
    }

    public function contact()
    {

        return view('contact');
    }


}