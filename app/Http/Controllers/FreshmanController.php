<?php

namespace App\Http\Controllers;

use App\Models\CheckCredit;
use Illuminate\Support\Arr;
use App\Traits\Jsonable;
use App\Traits\Verifiable;
use App\Http\Requests\CheckFormRequest;


class FreshmanController extends Controller
{
    use Jsonable, Verifiable;

    public function freshman()
    {
        return view('university/freshman/freshman-freshman');
    }

    public function check(CheckFormRequest $request)
    {
        //todo 必須科目で落単している科目，総取得数
        $json = $this->toJson($request->data);

        if(!Arr::has($json, 'data.freshman')){
            return redirect(route('index'))->with('message', '不正な操作が行われました。');
        }

        $data = $this->getData($json, 'freshman');

        $notCompulsorySubjects = $this->requiredFreshman($data);         //必修科目だが、落としている単位
        $totalCredits = count($data) * 2;       //修得済単位数（１科目２単位）

        return view('university/result/freshman-result', compact('notCompulsorySubjects', 'totalCredits'));
    }
}
