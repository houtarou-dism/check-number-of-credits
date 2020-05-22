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
use App\Traits\Convertible;
use App\Http\Requests\CheckFormRequest;


class SeniorController extends Controller
{
    use Jsonable, Verifiable, Obtainable, Convertible;

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

    /**
     * @param CheckFormRequest $request
     * @return Application|Factory|RedirectResponse|Redirector|View
     */
    public function check(CheckFormRequest $request)
    {
        $json = $this->fromJson($request->data);

        if( !(Arr::has($json, 'data.freshman') && Arr::has($json, 'data.sophomore')
            && Arr::has($json, 'data.junior') && Arr::has($json, 'data.senior')))
        {
            return redirect(route('index'))->with('message', '不正な操作が行われました。');
        }

        $this->getSelectData($json);

        //必修科目だが、取得できていない科目一覧
        $notCompulsorySubjects = $this->getRequiredAll($this->requiredFreshman(), $this->requiredSophomore(), $this->requiredJunior(), $this->requiredSenior());

        //合計修得単位数
        $totalCredits = $this->getTotalCredits();

        //進級条件を満たしているか
        $judePromotion = $this->getJudePromotionSenior();

        return view('university.result.senior-result', compact('notCompulsorySubjects', 'totalCredits', 'judePromotion'));
    }
}
