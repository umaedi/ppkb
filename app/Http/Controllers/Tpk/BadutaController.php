<?php

namespace App\Http\Controllers\Tpk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BadutaController extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Baduta';
        return view('tpk.baduta.index');
    }
}
