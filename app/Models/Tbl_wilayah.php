<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbl_wilayah extends Model
{
	protected $table = 'tbl_wilayah';

	protected $primaryKey = 'id';

	protected $guarded = [];

	public function tbl_user_tpk()
	{
		return $this->hasMany(Tbl_user_tpk::class);
	}
}
