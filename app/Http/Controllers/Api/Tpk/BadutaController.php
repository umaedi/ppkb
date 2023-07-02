<?php

namespace App\Http\Controllers\Api\Tpk;

use App\Models\Tbl_baduta;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\BadutaService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Api as Controller;

class BadutaController extends Controller
{
    protected $baduta;
    public function __construct(Tbl_baduta $baduta)
    {
        $this->baduta = new BadutaService($baduta);
    }

    public function index()
    {
        $baduta = $this->baduta->Query();

        $page = request()->get('paginate', 5);
        if (\request('search')) {
            $baduta->where('nama', 'like', '%' . request('search') . '%');
        }

        $data['table'] = $baduta->where('wilayah_id', auth()->guard('tpk')->user()->wilayah_id)->where('kunjungan', 1)->latest()->paginate($page);
        return view('tpk.baduta._data_table', $data);
    }

    public function store(Request $request)
    {
        $data_baduta = $this->baduta->Query()->where('nik', $request->nik)->first();

        if (!$data_baduta) {
            $kunjungan = 1;
            $kode_baduta = strtoupper(Str::random(16));
        } else {
            $data_kunjungan = $data_baduta->latest()->first();
            $kunjungan = $data_kunjungan->kunjungan + 1;
            $kode_baduta = $data_baduta->kode_baduta;
        }

        $data = $request->except('_token');
        $data['kode_baduta'] = $kode_baduta;
        $data['kunjungan']  = $kunjungan;
        $data['pendamping_id'] = auth()->guard('tpk')->user()->id;

        $usia =  date('Y') - substr($data['tgl_lahir'], 0, 4);
        $data['usia'] = $usia;
        if ($usia >= 25) {
            $data['status_usia'] = 1;
        } else {
            $data['status_usia'] = 2;
        }

        DB::beginTransaction();

        try {
            $this->baduta->store($data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError(json_encode($th->getMessage()));
        }

        DB::commit();
        return $this->sendResponseCreate($data);
    }

    public function show($id)
    {
        $data['baduta'] = $this->baduta->find($id);
        return view('tpk.baduta._show_data', $data);
    }

    public function update(Request $request, $id)
    {
        $baduta = $this->baduta->find($id);
        $data = $request->except('_token');

        if ($data['penggunaan_kontrasepsi'] == null) {
            $data['penggunaan_kontrasepsi'] = $baduta->penggunaan_kontrasepsi;
        }

        if ($data['air_minum_layak'] == null) {
            $data['air_minum_layak'] = $baduta->air_minum_layak;
        }

        if ($data['tempat_bab_layak'] == null) {
            $data['tempat_bab_layak'] = $baduta->tempat_bab_layak;
        }

        if ($data['jenis_kelamin'] == null) {
            $data['jenis_kelamin'] = $baduta->jenis_kelamin;
        }

        if ($data['kehadiran_posyandu'] == null) {
            $data['kehadiran_posyandu'] = $baduta->kehadiran_posyandu;
        }

        if ($data['penyuluhan_kie'] == null) {
            $data['penyuluhan_kie'] = $baduta->penyuluhan_kie;
        }

        if ($data['pemberian_fasilitas_rujukan'] == null) {
            $data['pemberian_fasilitas_rujukan'] = $baduta->pemberian_fasilitas_rujukan;
        }

        if ($data['bansos'] == null) {
            $data['bansos'] = $baduta->bansos;
        }

        DB::beginTransaction();
        try {
            $this->baduta->update($id, $data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError(json_encode($th));
        }

        DB::commit();
        return $this->sendResponseUpdate($data);
    }

    public function histories($kode_baduta)
    {
        $data['baduta'] = $this->baduta->Query()->where('kode_baduta', $kode_baduta)->first();
        $data['table']  = $this->baduta->Query()->where('pendamping_id', auth()->guard('tpk')->user()->id)->get();
        return view('tpk.baduta._data_table_histories', $data);
    }
}
