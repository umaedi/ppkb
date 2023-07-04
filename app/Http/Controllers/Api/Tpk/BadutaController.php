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
            $kunjungan = $data_baduta->kunjungan + 1;
            $kode_baduta = $data_baduta->kode_baduta;
        }

        $data = $request->except('_token', 'type_data');
        $data['kode_baduta'] = $kode_baduta;
        $data['kunjungan']  = $kunjungan;
        $data['pendamping_id'] = auth()->guard('tpk')->user()->id;
        $data['wilayah_id'] = auth()->guard('tpk')->user()->wilayah_id;
        $data['tgl_kunjungan'] = date('Y-m-d');

        //hitung usia baduta
        $tgl_lahir_bayi = date_create($data['tgl_lahir_bayi']);
        $dateNow = date_create();
        $diff = date_diff($tgl_lahir_bayi, $dateNow);
        $data['usia_bayi'] = $diff->days;

        $usia =  date('Y') - substr($data['tgl_lahir'], 0, 4);
        $data['usia'] = $usia;
        if ($usia >= 25) {
            $data['status_usia'] = 1;
        } else {
            $data['status_usia'] = 2;
        }

        //status urutan anak
        $tgl_lahir_anak_sebelum = date_create($data['tgl_lahir_anak_sebelum']);
        $dif = date_diff($tgl_lahir_anak_sebelum, $dateNow);
        $data['status_urutan_anak'] = $dif->y;

        $data['tgl_pengukuran_saat_ini'] = now();
        $data['pb_lahir'] = $data['pb_saat_ini'];

        if ($data['bb_kehamilan'] > 1) {
            $data['status_bb_saat_ini'] = 1;
        } else {
            $data['status_bb_saat_ini'] = 2;
        }

        if ($data['pb_saat_ini'] >= 10) {
            $data['status_pb'] = 1;
        } else {
            $data['status_pb'] = 2;
        }
        if ($data['pb_saat_ini'] >= 10) {
            $data['status_bb_pb'] = 1;
        } else {
            $data['status_bb_pb'] = 2;
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
        $data = $request->except('_token', 'type_data');

        if (is_numeric($id)) {
            $data['tgl_kunjungan_berikutnya'] = \Carbon\Carbon::parse($request->tgl_kunjungan_berikutnya)->format('Y-m-d');
        }

        $data['tgl_lahir'] = \Carbon\Carbon::parse($request->tgl_lahir)->format('Y-m-d');
        $data['tgl_lahir_bayi'] = \Carbon\Carbon::parse($request->tgl_lahir_bayi)->format('Y-m-d');
        $data['tgl_lahir_anak_sebelum'] = \Carbon\Carbon::parse($request->tgl_lahir_anak_sebelum)->format('Y-m-d');

        DB::beginTransaction();
        try {
            $this->baduta->update($id, $data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError($th);
        }
        DB::commit();
        return $this->sendResponseUpdate($data);
    }

    public function histories($kode_baduta)
    {
        $data['baduta'] = $this->baduta->Query()->where('kode_baduta', $kode_baduta)->first();
        $data['table']  = $this->baduta->Query()->where('kode_baduta', $kode_baduta)->get();
        return view('tpk.baduta._data_table_histories', $data);
    }

    public function destroy($id)
    {
        try {
            $this->baduta->destroy($id);
        } catch (\Throwable $th) {
            return $this->sendResponseError($th);
        }

        return $this->sendResponseDelete($id);
    }
}
