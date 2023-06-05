<?php

namespace App\Http\Controllers\Tpk;

use App\Http\Controllers\Controller;

class PpsController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Pasca Persalinan';
        return view('tpk.pps.index', $data);
    }
}
