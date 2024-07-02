<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'alamat',
        'data_beasiswa_id',
    ];

    public function dataBeasiswa()
    {
        return $this->belongsTo(DataBeasiswa::class, 'data_beasiswa_id');
    }
}
