<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = 'logs';
    protected $primaryKey = 'log_id';
    const CREATED_AT = 'log_created_at';
    const UPDATED_AT = 'log_updated_at';
    protected $fillable = [
        'user_id',
        'log_description',
        'log_type',
    ];
}
