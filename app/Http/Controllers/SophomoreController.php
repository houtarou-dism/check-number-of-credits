<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Traits\Jsonable;
use App\Traits\Verifiable;
use App\Http\Requests\CheckFormRequest;


class SophomoreController extends Controller
{
    use Jsonable, Verifiable;

    public function freshman()
    {
        return view('university.sophomore.sophomore-freshman');
    }

    public function sophomore()
    {
        return view('university.sophomore.sophomore-sophomore');
    }

    public function check(CheckFormRequest $request)
    {
        //todo 必須科目で落単している科目，総取得数
        $json = $this->toJson($request->data);

        if(!Arr::has($json, 'data.freshman') && !Arr::has($json, 'data.sophomore')){
            return redirect(route('index'))->with('message', '不正な操作が行われました。');
        }

        $notCompulsorySubjects = [];        //必修科目だが、落としている単位

        foreach ($this->selectYears as $selectYear){
            $this->data[$selectYear] =  $this->getData($json, $selectYear)  ?? [];
            if($selectYear === 'sophomore') { break; }
        }

        $notFreshmanCompulsorySubjects = json_encode($this->requiredFreshman($this->data['freshman']));
        $notSophomoreCompulsorySubjects = json_encode($this->requiredSophomore($this->data['sophomore']));

        $totalCredits = (count($this->data['freshman']) + count($this->data['sophomore'])) * 2;       //修得済単位数（１科目２単位）

        return view('university/result/sophomore-result', compact('notFreshmanCompulsorySubjects','notSophomoreCompulsorySubjects','totalCredits'));
    }
}
