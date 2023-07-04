<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Response;
use App\Http\Controllers\Auth\AuthTpkController;
use App\Http\Controllers\Auth\AuthAdministratorController;
use Illuminate\Support\Facades\Auth;


//Auth User Tpk
Route::controller(AuthTpkController::class)->group(function () {
	Route::post('/tpk/signin', 'signin')->name('signin2');

	Route::post('/tpk/forgot-password', 'forgot_password');
	Route::post('/tpk/reset-password', 'reset_password');
});

//Auth User Administrator
Route::group(['prefix' => 'auth'], function () {
	Route::controller(AuthAdministratorController::class)->group(function () {
		Route::post('/signin', 'login')->name('signin');
	});
});


//AUTH MIDDLEWARE SANCTUM
Route::group(['middleware' => 'auth:sanctum',], function () {
	Route::get('/user', [AuthTpkController::class, 'User']);

	Route::group(['middleware' => ['auth:sanctum', 'role:tpk']], function () {

		Route::prefix('tpk')->group(function () {

			//catin
			Route::post('/catin/store', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'store']);
			Route::get('/catin', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'index']);
			Route::get('/catin/show/{id}', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'show']);
			Route::post('/catin/update/{id_pendampingan}', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'update']);
			Route::get('/catin/histories/{kode_catin}', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'histories']);
			Route::post('/catin/histories/delete/{id}', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'delete']);
			Route::post('/catin/destroy/{kode_catin}', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'destroy']);

			//bumil
			Route::get('/bumil', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'index']);
			Route::post('/bumil/store', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'store']);
			Route::get('/bumil/show/{id}', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'show']);
			Route::post('/bumil/update/{id_bumil}', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'update']);
			Route::get('/bumil/histories/{kode_bumil}', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'histories']);
			Route::post('/bumil/histories/destroy/{id}', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'destroy']);
			Route::post('/bumil/histories/delete/{kode_bumil}', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'delete']);

			//Pasca persalinan
			Route::get('/pps', [\App\Http\Controllers\Api\Tpk\PpsController::class, 'index']);
			Route::post('/pps/store', [\App\Http\Controllers\Api\Tpk\PpsController::class, 'store']);
			Route::get('/pps/show/{id}', [\App\Http\Controllers\Api\Tpk\PpsController::class, 'show']);
			Route::post('/pps/update/{id}', [\App\Http\Controllers\Api\Tpk\PpsController::class, 'update']);
			Route::get('/pps/histories/{kode_pps}', [\App\Http\Controllers\Api\Tpk\PpsController::class, 'histories']);
			Route::post('/pps/histories/destroy/{id}', [\App\Http\Controllers\Api\Tpk\PpsController::class, 'destroy']);

			//baduta
			Route::get('/baduta', [\App\Http\Controllers\Api\Tpk\BadutaController::class, 'index']);
			Route::post('/baduta/store', [\App\Http\Controllers\Api\Tpk\BadutaController::class, 'store']);
			Route::get('/baduta/show/{id}', [\App\Http\Controllers\Api\Tpk\BadutaController::class, 'show']);
			Route::post('/baduta/update/{id}', [\App\Http\Controllers\Api\Tpk\BadutaController::class, 'update']);
			Route::get('/baduta/histories/{kode_baduta}', [\App\Http\Controllers\Api\Tpk\BadutaController::class, 'histories']);
			Route::post('/baduta/histories/destroy/{id}', [\App\Http\Controllers\Api\Tpk\BadutaController::class, 'destroy']);

			//data wilayah
			Route::get('/wilayah', [\App\Http\Controllers\Api\Tpk\WilayahController::class, 'index']);

			//data dashboard
			Route::get('/data_dashboard', [\App\Http\Controllers\Api\Tpk\DatadashboardController::class, 'index']);

			//profile
			Route::post('/profile/update', [\App\Http\Controllers\Api\Tpk\ProfileControlleer::class, 'index']);

			//destroy
			Route::post('/destroy', [\App\Http\Controllers\Auth\AuthTpkController::class, 'destroy']);
		});
	});

	//API ADMIN
	Route::prefix('/v1')->group(function () {
		Route::get('/meta/filter', [Response\Admin\Meta::class, 'filter']);
		Route::get('/meta/report', [Response\Admin\Meta::class, 'report']);
		Route::get('/meta/wilayah_list', [Response\Admin\Meta::class, 'wilayah_list']);

		Route::get('/setting/get', [Response\Admin\Setting::class, 'index']);
		Route::post('/setting/update', [Response\Admin\Setting::class, 'update']);

		Route::prefix('/administrator')->group(function () {
			Route::get('/account', [Response\Admin\Users::class, 'index']);
			Route::post('/account_update', [Response\Admin\Users::class, 'account_update']);
		});

		//API BUMIL
		Route::prefix('/bumil')->group(function () {
			Route::post('/list', [Response\Admin\DataBumil::class, 'index']);
			Route::get('/view_id/{id}', [Response\Admin\DataBumil::class, 'view_id']);
			Route::post('/view_kode/{id}', [Response\Admin\DataBumil::class, 'view_kode']);
			Route::get('/report', [Response\Admin\DataBumil::class, 'report']);
		});

		//API CATIN
		Route::prefix('/catin')->group(function () {
			Route::post('/list', [Response\Admin\DataCatin::class, 'index']);
			Route::get('/view_id/{id}', [Response\Admin\DataCatin::class, 'view_id']);
			Route::post('/view_kode/{id}', [Response\Admin\DataCatin::class, 'view_kode']);
			Route::get('/report', [Response\Admin\DataCatin::class, 'report']);
		});

		//API PASCA PERSALINAN
		Route::prefix('/pasca_persalinan')->group(function () {
			Route::post('/list', [Response\Admin\DataPascaPersalinan::class, 'index']);
			Route::get('/view_id/{id}', [Response\Admin\DataPascaPersalinan::class, 'view_id']);
			Route::post('/view_kode/{id}', [Response\Admin\DataPascaPersalinan::class, 'view_kode']);
			Route::get('/report', [Response\Admin\DataPascaPersalinan::class, 'report']);
		});

		//API BADUTA
		Route::prefix('/baduta')->group(function () {
			Route::post('/list', [Response\Admin\DataBaduta::class, 'index']);
			Route::get('/view_id/{id}', [Response\Admin\DataBaduta::class, 'view_id']);
			Route::post('/view_kode/{id}', [Response\Admin\DataBaduta::class, 'view_kode']);
			Route::get('/report', [Response\Admin\DataBaduta::class, 'report']);
		});

		//API PETUGAS TPK
		Route::prefix('/user_tpk')->group(function () {
			Route::post('/list', [Response\Admin\DataTpk::class, 'index']);
			Route::get('/view_id/{id}', [Response\Admin\DataTpk::class, 'view_id']);
			Route::post('/create', [Response\Admin\DataTpk::class, 'create']);
			Route::post('/update/{id}', [Response\Admin\DataTpk::class, 'update']);
			Route::delete('/delete/{id}', [Response\Admin\DataTpk::class, 'delete']);
		});
	});
});
