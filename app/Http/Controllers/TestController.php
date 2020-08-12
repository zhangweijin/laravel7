<?php

namespace App\Http\Controllers;

use App\Test;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function test()
    {
        Redis::set("city","guangdong");
        $res = Redis::get('city');
        var_dump($res);
    }


}
