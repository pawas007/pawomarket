<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPages extends Controller
{


    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function about()
    {
        return view('pages.about-us');
    }

    public function faq()
    {
        return view('pages.faq');
    }


}
