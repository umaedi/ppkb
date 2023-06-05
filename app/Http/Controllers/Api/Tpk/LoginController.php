<?php

namespace App\Http\Controllers\Api\Tpk;

use App\Models\Tbl_user_tpk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message', 'Email atau Password Wajib Diisi!']);
        }

        $credentials = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        $tpk = Tbl_user_tpk::where('email', $request->email)->first();

        if (!Auth::guard('tpk')->attempt($credentials)) {
            return response()->json(['message', 'Email Atau Password Salah']);
        }

        $tpk = Tbl_user_tpk::where('email', $request->email)->first();

        $token = $tpk->createToken('auth_token', ['tpk'])->plainTextToken;
        return response()->json(['access_token' => $token, 'token_type' => 'Bearer']);
    }
}
