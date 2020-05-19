<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SophomoreController extends Controller
{
    public function freshman()
    {
        return view('university.sophomore.sophomore-freshman');
    }

    public function sophomore(Request $request)
    {
        return view('university.sophomore.sophomore-sophomore');
    }

    public function check(Request $request)
    {
        dd(($request));
    }
}
