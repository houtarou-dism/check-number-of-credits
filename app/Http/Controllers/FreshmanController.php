<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use App\Traits\Jsonable;
use App\Traits\Verifiable;
use App\Traits\Obtainable;
use App\Http\Requests\CheckFormRequest;


class FreshmanController extends Controller
{
    use Jsonable, Verifiable, Obtainable;

    public function freshman()
    {
        return view('university.freshman.freshman-freshman');
    }

    /**
     * @param CheckFormRequest $request
     * @return Application|Factory|RedirectResponse|Redirector|View
     */
    public function check(CheckFormRequest $request)
    {
        //todo 必須科目で落単している科目，総取得数
        $json = $this->fromJson($request->data);

        if(! Arr::has($json, 'data.freshman')){
            return redirect(route('index'))->with('message', '不正な操作が行われました。');
        }

        $this->getSelectData($json);

        //必修科目だが、取得できていない科目一覧
        $notCompulsorySubjects = $this->requiredFreshman($this->data['freshman']);
        //合計修得単位数
        $totalCredits = $this->getTotalCredits();

        return view('university.result.freshman-result', compact('notCompulsorySubjects', 'totalCredits'));
    }
}
