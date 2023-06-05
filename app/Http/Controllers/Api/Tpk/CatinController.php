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

        $data['table'] = $catin->paginate($page);
        return view('tpk.catin._data_table', $data);
    }

    public function store(Request $request)
    {
        $data_catin = $this->catin->Query()->where('nik_catin_pria', $request->nik_catin_pria)->first();

        if (!$data_catin) {
            $kunjungan = 1;
            $kode_catin = strtoupper(Str::random(16));
        } else {
            $kunjungan = $data_catin->kunjungan + 1;
            $kode_catin = $data_catin->kode_catin;
        }

        $data = $request->except('_token');
        $data['kode_catin'] = $kode_catin;
        $data['kunjungan']  = $kunjungan;
        $data['pendamping_id'] = 1;

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
}
