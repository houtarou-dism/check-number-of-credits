<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class JuniorController extends Controller
{
    public function freshman()
    {
        return view('university.junior.junior-freshman');
    }

    public function sophomore()
    {
        return view('university.junior.junior-sophomore');
    }

    public function junior()
    {
        return view('university.junior.junior-junior');
    }

    public function check(Request $request)
    {
        dd($request);
    }
}
