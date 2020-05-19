<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SeniorController extends Controller
{
    public function freshman()
    {
        return view('university.senior.senior-freshman');
    }

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

    public function check(Request $request)
    {
        dd($request);
    }
}
