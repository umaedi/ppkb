<?php

namespace App\Http\Controllers\Api\Tpk;

use App\Http\Controllers\Api as Controller;
use App\Models\Tbl_baduta;
use App\Models\Tbl_bumil;
use App\Models\Tbl_catin;
use App\Models\Tbl_pasca_persalinan;
use Illuminate\Support\Facades\Auth;

class DatadashboardController extends Controller
{
    public function index()
    {
        $data['catin']  = Tbl_catin::count();
        $data['bumil']  = Tbl_bumil::count();
        $data['pps']    = Tbl_pasca_persalinan::count();
        $data['baduta']    = Tbl_baduta::count();
        return $this->sendResponseOk($data);
    }
}
