<?php

namespace App\Http\Controllers;

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
                return view('university.freshman.freshman-freshman');
                break;

            case 'sophomore':
                return view('university.sophomore.sophomore-freshman');
                break;

            case 'junior':
                return view('university.junior.junior-freshman');
                break;

            case 'senior':
                return view('university.senior.senior-freshman');
                break;

            default:
                return abort(404);
        }
    }
}
