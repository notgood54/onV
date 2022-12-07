<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    protected $data = [
        'nomor',
        'harga',
        'foto'
    ];

    protected function serializeDate(DateTimeInterface $date){
        return $date->format('Y-m-d H');
    }
}
