<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    public function test1() {
        $data = Options::get();
        return $data;
    }
}
