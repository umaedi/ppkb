<?php

namespace App\Http\Controllers\Tpk;

use App\Charts\CatinChart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BumilController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Ibu Hamil';
        return view('tpk.bumil.index', $data);
    }

    public function histories()
    {
        $data['title'] = 'Data Riwayat Ibu Hamil';
        return view('tpk.bumil.histories', $data);
    }
}
