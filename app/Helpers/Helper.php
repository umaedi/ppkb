<?php

use App\Models\Log;
use Illuminate\Support\Facades\Auth;

if (!function_exists('saveLogs')) {
    function saveLogs($description, $type)
    {
        $dataLog = [
            'user_id' => Auth::user()->id ??  Auth::guard('tpk')->user()->id,
            'log_description' => Auth::user()->nama ?? Auth::guard('tpk')->user()->nama . ' ' . $description,
            'log_type' => $type,
        ];
        Log::create($dataLog);
    }
}
