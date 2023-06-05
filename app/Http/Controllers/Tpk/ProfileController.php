<?php

namespace App\Http\Controllers\Tpk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data['title'] = 'Profile TPK';
        return view('tpk.profile.index', $data);
    }
}
