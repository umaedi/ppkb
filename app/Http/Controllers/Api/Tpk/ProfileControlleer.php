<?php

namespace App\Http\Controllers\Api\Tpk;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Tbl_user_tpk;
use App\Services\TpkService;
use Illuminate\Support\Facades\Hash;

class ProfileControlleer extends Controller
{
    protected $tpk;
    public function __construct(Tbl_user_tpk $tpk)
    {
        $this->tpk = new TpkService($tpk);
    }

    public function index(Request $request)
    {
        $tpk = $this->tpk->find(auth()->guard('tpk')->user()->id);
        $data = $request->except('_token');

        if ($data['password'] == null) {
            $data['password'] = $tpk->password;
        } else {
            $data['password'] = Hash::make($data['password']);
        }

        $data['wilayah_id'] = $tpk->wilayah_id;

        DB::beginTransaction();
        try {
            $this->tpk->update($tpk->id, $data);
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return response()->json(['message', 'Internal Server Error!']);
        }

        DB::commit();
        return response()->json(['message', 'Profile Berhasil Di Update']);
    }
}
