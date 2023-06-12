<?php

namespace App\Http\Controllers\Tpk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title']  = 'E-CATIN';
        return view('tpk.dashboard.index', $data);
    }
}
