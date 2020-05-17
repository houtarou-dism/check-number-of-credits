<?php

namespace App\Http\Controllers;


class SeniorController extends Controller
{
    public function sophomore()
    {
        return view('university.senior.senior-sophomore');
    }

    public function junior()
    {
        return view('university.senior.senior-junior');
    }

    public function senior()
    {
        return view('university.senior.senior-senior');
    }
}
