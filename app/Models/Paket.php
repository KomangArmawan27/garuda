<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'id', 'nama_paket', 'kecepatan', 'nama_provider', 'harga', 'updated_at', 'created_at'
    ];
}
