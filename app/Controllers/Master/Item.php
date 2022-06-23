<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;

class Item extends BaseController
{
    public function index()
    {
        return view('master/item_list');
    }
}
