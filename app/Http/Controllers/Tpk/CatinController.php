<?php

namespace App\Http\Controllers\Tpk;

use App\Charts\CatinChart;
use App\Http\Controllers\Controller;

class CatinController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Catin';
        return view('tpk.catin.index', $data);
    }
}
