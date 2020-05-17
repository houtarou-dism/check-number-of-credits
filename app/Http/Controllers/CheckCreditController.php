<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SelectYearRequest;


class CheckCreditController extends Controller
{
    public function index()
    {
        return view('university.top');
    }

    public function select_year(SelectYearRequest $request)
    {
        switch ($request['selectYear']){
            case 'freshman':
                return view('university.select.freshman');
                break;

            case 'sophomore':
                return view('university.select.sophomore');
                break;

            case 'junior':
                return view('university.select.junior');
                break;

            case 'senior':
                return view('university.select.senior');
                break;

            default:
                return abort(404);
        }
    }
}
