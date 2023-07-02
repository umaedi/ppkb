<?php

namespace App\Http\Controllers\Api\Tpk;

use App\Models\Tbl_bumil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\BumilService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api as Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BumilController extends Controller
{
    protected $bumil;
    public function __construct(Tbl_bumil $bumil)
    {
        $this->bumil = new BumilService($bumil);
    }

    public function index()
    {
        $bumil = $this->bumil->Query();

        $page = request()->get('paginate', 5);
        if (\request('search')) {
            $bumil->where('nama', 'like', '%' . request('search') . '%');
        }

        $data['table'] = $bumil->where('wilayah_id', auth()->guard('tpk')->user()->wilayah_id)->where('kunjungan', 1)->latest()->paginate($page);
        return view('tpk.bumil._data_table', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendResponseError(json_encode($validator->errors()));
        }

        $data_bumil = $this->bumil->Query()->where('nik', $request->nik)->first();

        if (!$data_bumil) {
            $kunjungan = 1;
            $kode_bumil = strtoupper(Str::random(16));
        } else {
            $kunjungan = $data_bumil->kunjungan + 1;
            $kode_bumil = $data_bumil->kode_bumil;
        }


        $data = $request->except('_token', 'type_data');
        $data['kode_bumil'] = $kode_bumil;
        $data['kunjungan']  = $kunjungan;
        $data['pendamping_id'] = Auth::guard('tpk')->user()->id;
        $data['wilayah_id'] = Auth::guard('tpk')->user()->wilayah_id;

        $data['tgl_kunjungan'] = \Carbon\Carbon::parse($request->tgl_kunjungan)->format('Y-m-d');
        $data['tgl_kunjungan_berikutnya'] = \Carbon\Carbon::parse($request->tgl_kunjungan_berikutnya)->format('Y-m-d');

        if ($data['jumlah_anak'] == 2) {
            $data['status_jumlah_anak'] = 1;
        } else {
            $data['status_jumlah_anak'] = 2;
        }

        if ($data['tfu'] >= 23) {
            $data['status_tfu'] = 1;
        } else {
            $data['status_tfu'] = 2;
        }

        if ($data['imt'] >= 19) {
            $data['status_imt'] = 1;
        } else {
            $data['status_imt'] = 2;
        }

        if ($data['riwayat_penyakit'] == 'Lainya') {
            $data['status_riwayat_penyakit'] = 1;
        } else {
            $data['status_riwayat_penyakit'] = 2;
        }

        if ($data['kadar_hb'] >= 17) {
            $data['status_hb'] = 1;
        } else {
            $data['status_hb'] = 2;
        }

        if ($data['lila'] >= 23) {
            $data['status_lila'] = 1;
        } else {
            $data['status_lila'] = 2;
        }

        if ($data['tbj'] >= 3787) {
            $data['status_tbj'] = 1;
        } else {
            $data['status_tbj'] = 2;
        }

        //PROSES DATA
        DB::beginTransaction();

        try {
            $this->bumil->store($data);
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th->getMessage());
            return $this->sendResponseError($th);
        }

        DB::commit();
        return $this->sendResponseCreate($data);
    }

    public function show($id)
    {
        $data['bumil'] = $this->bumil->find($id);
        return view('tpk.bumil._show_data', $data);
    }

    public function update(Request $request, $id_bumil)
    {
        $bumil = $this->bumil->find($id_bumil);
        $data = $request->except('_token', 'type_data');

        if (is_numeric($id_bumil)) {
            if ($data['jumlah_anak'] == null) {
                $data['jumlah_anak'] = $bumil->jumlah_anak;
            }

            if ($data['riwayat_penyakit'] == null) {
                $data['riwayat_penyakit'] = $bumil->riwayat_penyakit;
            }

            $data['tgl_kunjungan'] = \Carbon\Carbon::parse($request->tgl_kunjungan)->format('Y-m-d');
            $data['tgl_kunjungan_berikutnya'] = \Carbon\Carbon::parse($request->tgl_kunjungan_berikutnya)->format('Y-m-d');
        }

        $data['tgl_lahir'] = \Carbon\Carbon::parse($request->tgl_lahir)->format('Y-m-d');
        DB::beginTransaction();

        try {
            $this->bumil->update($id_bumil, $data);
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th->getMessage());
            return $this->sendResponseError($th);
        }

        DB::commit();
        return $this->sendResponseUpdate($data);
    }

    public function histories($kode_bumil)
    {
        $data['bumil']  = $this->bumil->Query()->where('kode_bumil', $kode_bumil)->first();
        $data['table'] = $this->bumil->Query()->where('kode_bumil', $kode_bumil)->get();
        return view('tpk.bumil._data_histories', $data);
    }

    public function delete($kode_bumil)
    {
        try {
            $this->bumil->delete($kode_bumil);
        } catch (\Throwable $th) {
            return $this->sendResponseError($th);
        }

        return $this->sendResponseDelete($kode_bumil);
    }

    public function destroy($id)
    {
        try {
            $this->bumil->destroy($id);
        } catch (\Throwable $th) {
            return $this->sendResponseError($th);
        }

        return $this->sendResponseDelete($id);
    }
}
