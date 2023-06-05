<?php

namespace App\Http\Controllers\Api\Tpk;

use App\Http\Controllers\Api as Controller;
use App\Models\Tbl_wilayah;

class WilayahController extends Controller
{
    public function index()
    {
        $data = Tbl_wilayah::get();
        return $this->sendResponseOk($data);
    }
}
