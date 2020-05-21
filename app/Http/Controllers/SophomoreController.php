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


class SophomoreController extends Controller
{
    use Jsonable, Verifiable, Obtainable;

    private $notFreshmanCompulsorySubjects;
    private $notSophomoreCompulsorySubjects;

    public function freshman()
    {
        return view('university.sophomore.sophomore-freshman');
    }

    public function sophomore()
    {
        return view('university.sophomore.sophomore-sophomore');
    }

    /**
     * @param CheckFormRequest $request
     * @return Application|Factory|RedirectResponse|Redirector|View
     */
    public function check(CheckFormRequest $request)
    {
        //todo 必須科目で落単している科目，総取得数
        $json = $this->fromJson($request->data);

        if(! (Arr::has($json, 'data.freshman') && Arr::has($json, 'data.sophomore'))){
            return redirect(route('index'))->with('message', '不正な操作が行われました。');
        }

        $this->getSelectData($json);

        //必修科目だが、取得できていない科目一覧
        $notCompulsorySubjects = $this->getRequiredAll();

        //合計修得単位数
        $totalCredits = $this->getTotalCredits();

        //進級条件を満たしているか（６４単位以上修得していること）
        $judePromotion = $this->getJudePromotionSophomore();

        return view('university.result.sophomore-result', compact('notCompulsorySubjects', 'totalCredits', 'judePromotion'));
    }
}
