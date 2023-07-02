<?php

namespace App\Http\Controllers\Api\Tpk;

use App\Http\Controllers\Api as Controller;
use App\Models\Tbl_baduta;
use App\Models\Tbl_bumil;
use App\Models\Tbl_catin;
use App\Models\Tbl_pasca_persalinan;

class DatadashboardController extends Controller
{
    public function index()
    {
        $data['catin']  = Tbl_catin::where('wilayah_id', auth()->guard('tpk')->user()->wilayah_id)->where('kunjungan', 1)->count();
        $data['bumil']  = Tbl_bumil::where('wilayah_id', auth()->guard('tpk')->user()->wilayah_id)->where('kunjungan', 1)->count();
        $data['pps']    = Tbl_pasca_persalinan::where('wilayah_id', auth()->guard('tpk')->user()->wilayah_id)->where('kunjungan', 1)->count();
        $data['baduta']    = Tbl_baduta::where('wilayah_id', auth()->guard('tpk')->user()->wilayah_id)->where('kunjungan', 1)->count();
        return $this->sendResponseOk($data);
    }
}
