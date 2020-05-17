<?php

namespace App\Http\Controllers;


class JuniorController extends Controller
{
    public function sophomore()
    {
        return view('university.junior.junior-sophomore');
    }

    public function junior()
    {
        return view('university.junior.junior-junior');
    }
}
