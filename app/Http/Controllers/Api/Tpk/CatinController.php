<?php

namespace App\Http\Controllers\Api\Tpk;

use App\Models\Tbl_catin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Api as Controller;
use App\Services\CatinService;

class CatinController extends Controller
{
    protected $catin;
    public function __construct(Tbl_catin $catin)
    {
        $this->catin = new CatinService($catin);
    }

    public function index()
    {
        $catin = $this->catin->Query();

        $page = request()->get('paginate', 5);
        if (\request('search')) {
            $catin->where('nama_catin_pria', 'like', '%' . request('search') . '%')->orWhere('nama_catin_wanita', 'like', '%' . request('search') . '%');
        }

        $data['table'] = $catin->where('wilayah_id', auth()->guard('tpk')->user()->wilayah_id)->where('kunjungan', 1)->latest()->paginate($page);
        return view('tpk.catin._data_table', $data);
    }

    public function store(Request $request)
    {
        $data_catin = $this->catin->Query()->where('nik_catin_pria', $request->nik_catin_pria)->latest()->first();

        if (!$data_catin) {
            $kunjungan = 1;
            $kode_catin = strtoupper(Str::random(16));
        } else {
            $kunjungan = $data_catin->kunjungan + 1;
            $kode_catin = $data_catin->kode_catin;
        }

        $data = $request->except('_token');

        $usia_catin_pria =  date('Y') - substr($data['tgl_lahir_catin_pria'], 0, 4);
        if ($usia_catin_pria >= 25) {
            $status_usia_pria = 1;
        } else {
            $status_usia_pria = 2;
        }

        $usia_catin_wanita =  date('Y') - substr($data['tgl_lahir_catin_wanita'], 0, 4);
        if ($usia_catin_wanita >= 25) {
            $status_usia_wanita = 1;
        } else {
            $status_usia_wanita = 2;
        }

        if ($data['merokok_pria'] == 1) {
            $status_resiko = 1;
        } else {
            $status_resiko = 2;
        }

        $data['kode_catin']     = $kode_catin;
        $data['pendamping_id']  = auth()->guard('tpk')->user()->id;
        $data['wilayah_id']     = auth()->guard('tpk')->user()->wilayah_id;
        $data['usia_catin_pria'] =  $usia_catin_pria;
        $data['status_usia_catin_pria'] =  $status_usia_pria;
        $data['usia_catin_wanita']      =  $usia_catin_wanita;
        $data['status_usia_catin_wanita'] =   $status_usia_wanita;
        $data['status_resiko'] =   $status_resiko;
        $data['status_ideal'] =   $status_usia_pria;
        $data['kunjungan']  = $kunjungan;

        //PROSES DATA
        DB::beginTransaction();

        try {
            $this->catin->store($data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError(json_encode($th));
        }

        DB::commit();
        return $this->sendResponseCreate($data);
    }

    public function show($id)
    {
        $data['catin'] = $this->catin->find($id);
        return view('tpk.catin._show_data', $data);
    }

    public function update(Request $request, $id)
    {
        $catin = $this->catin->find($id);

        $data = $request->except('_token');

        if ($data['wilayah_id'] == null) {
            $data['wilayah_id'] = $catin->wilayah_id;
        };

        DB::beginTransaction();

        try {
            $this->catin->update($id, $data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError(json_encode($th->getMessage()));
        }

        DB::commit();
        return $this->sendResponseUpdate($data);
    }

    public function histories($kode_catin)
    {
        $data['catin']  = $this->catin->Query()->where('kode_catin', $kode_catin)->first();
        $data['table'] = $this->catin->Query()->where('kode_catin', $kode_catin)->get();
        return view('tpk.catin._data_histories', $data);
    }
}
