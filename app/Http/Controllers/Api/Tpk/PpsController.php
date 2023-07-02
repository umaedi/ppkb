<?php

namespace App\Http\Controllers\Api\Tpk;

use Illuminate\Support\Str;
use App\Services\PpsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_pasca_persalinan;
use App\Http\Controllers\Api  as Controller;
use Illuminate\Support\Facades\Log;

class PpsController extends Controller
{
    protected $pps;
    public function __construct(Tbl_pasca_persalinan $pps)
    {
        $this->pps = new PpsService($pps);
    }

    public function index()
    {
        $pps = $this->pps->Query();

        $page = request()->get('paginate', 5);
        if (\request('search')) {
            $pps->where('nama', 'like', '%' . request('search') . '%');
        }

        $data['table'] = $pps->where('wilayah_id', auth()->guard('tpk')->user()->wilayah_id)->where('kunjungan', 1)->latest()->paginate($page);
        return view('tpk.pps._data_table', $data);
    }

    public function store(Request $request)
    {

        $data_pps = $this->pps->Query()->where('nik', $request->nik)->first();

        if (!$data_pps) {
            $kode_pasca_persalinan = strtoupper(Str::random(16));
            $kunjungan = 1;
        } else {
            $kode_pasca_persalinan = $data_pps->kode_pasca_persalinan;
            $kunjungan = $data_pps->kunjungan + 1;
        }

        $data = $request->except('_token', 'type_data');
        $data['kode_pasca_persalinan'] = $kode_pasca_persalinan;
        $data['pendamping_id'] = auth()->guard('tpk')->user()->id;
        $data['wilayah_id'] = auth()->guard('tpk')->user()->wilayah_id;
        $data['kunjungan']     = $kunjungan;

        if ($data['cara_persalinan'] == 'Normal') {
            $data['status_ibu'] = 1;
        } else {
            $data['status_ibu'] = 2;
        }

        $data['tgl_melahirkan'] = \Carbon\Carbon::parse($request->tgl_melahirkan)->format('Y-m-d');
        $data['tgl_kunjungan'] = \Carbon\Carbon::parse($request->tgl_kunjungan)->format('Y-m-d');
        $data['tgl_kunjungan_berikut'] = \Carbon\Carbon::parse($request->tgl_kunjungan_berikut)->format('Y-m-d');

        //proses data
        DB::beginTransaction();

        try {
            $this->pps->store($data);
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
        $data['pps'] = $this->pps->find($id);
        return view('tpk.pps._show_data', $data);
    }

    public function update(Request $request, $id)
    {
        $pps = $this->pps->find($id);
        $data = $request->except('_token', 'type_data');

        if (is_numeric($id)) {
            if ($data['tempat_persalinan'] == null) {
                $data['tempat_persalinan'] = $pps->tempat_persalinan;
            }

            if ($data['penolong_persalinan'] == null) {
                $data['penolong_persalinan'] = $pps->penolong_persalinan;
            }

            if ($data['cara_persalinan'] == null) {
                $data['cara_persalinan'] = $pps->cara_persalinan;
            }

            if ($data['komplikasi_nifas'] == null) {
                $data['komplikasi_nifas'] = $pps->komplikasi_nifas;
            }

            if ($data['jenis_komplikasi'] == null) {
                $data['jenis_komplikasi'] = $pps->jenis_komplikasi;
            }

            if ($data['keadaan_bayi'] == null) {
                $data['keadaan_bayi'] = $pps->keadaan_bayi;
            }

            if ($data['kb_pasca_persalinan'] == null) {
                $data['kb_pasca_persalinan'] = $pps->kb_pasca_persalinan;
            }

            if ($data['jenis_kb'] == null) {
                $data['jenis_kb'] = $pps->jenis_kb;
            }

            if ($data['alasan_kb'] == null) {
                $data['alasan_kb'] = $pps->alasan_kb;
            }

            if ($data['alasan_tidak_kb'] == null) {
                $data['alasan_tidak_kb'] = $pps->alasan_tidak_kb;
            }
        }

        $data['tgl_lahir'] = \Carbon\Carbon::parse($request->tgl_lahir)->format('Y-m-d');
        $data['tgl_melahirkan'] = \Carbon\Carbon::parse($request->tgl_melahirkan)->format('Y-m-d');
        $data['tgl_kunjungan'] = \Carbon\Carbon::parse($request->tgl_kunjungan)->format('Y-m-d');
        $data['tgl_kunjungan_berikut'] = \Carbon\Carbon::parse($request->tgl_kunjungan_berikut)->format('Y-m-d');

        DB::beginTransaction();

        try {
            $this->pps->update($id, $data);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendResponseError(json_encode($th));
        }

        DB::commit();
        return $this->sendResponseUpdate($data);
    }

    public function histories($kode_pps)
    {
        if (\request()->ajax()) {
            $data['pps'] = $this->pps->Query()->where('kode_pasca_persalinan', $kode_pps)->first();
            $data['table'] = $this->pps->Query()->where('kode_pasca_persalinan', $kode_pps)->get();
            return view('tpk.pps._data_table_histories', $data);
        }
    }

    public function destroy($id)
    {
        try {
            $this->pps->destroy($id);
        } catch (\Throwable $th) {
            return $this->sendResponseError($th);
        }

        return $this->sendResponseDelete($id);
    }
}
