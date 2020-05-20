<?php

namespace App\Traits;

use Illuminate\Support\Arr;

Trait Jsonable
{
    public function toJson($data)
    {
        return json_decode($data, true);
    }

    public function getData($json, $select)
    {
        return Arr::get($json, 'data.'.$select);
    }
}
