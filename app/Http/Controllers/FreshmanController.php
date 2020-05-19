<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckFormRequest;

class FreshmanController extends Controller
{
    public function freshman()
    {
        return view('university/freshman/freshman-freshman');
    }

    public function check(CheckFormRequest $request)
    {
        //todo 必須単位で落単している科目，総取得数
        $json = json_decode($request->data, true);
        $selectYear = $json['data']['select'];
        $data = $json['data']['freshman'];

        if($selectYear !== 'freshman'){
            abort(404);
        }


        $totalCredits = count($data);       //修得済単位数


        return view('university/result/freshman-result');
    }
}
