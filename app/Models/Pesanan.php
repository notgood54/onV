<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $id;
    protected $fillable=[
        'nama',
        'noTelp',
        'email',
        'alamat',
        'tanggal',
        'jam',
    ];
}
