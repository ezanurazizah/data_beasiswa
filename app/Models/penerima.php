<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerima extends Model
{
    use HasFactory;
    protected $fillable = [
        'pendaftar_id',
        'data_beasiswa_id',
    ];
}
