<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreshmanController extends Controller
{
    public function freshman()
    {
        return view('university/freshman/freshman-freshman');
    }

    public function check(Request $request)
    {
        dd($request);
    }
}
