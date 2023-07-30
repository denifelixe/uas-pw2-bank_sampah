<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankSampah extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'bank_sampah';

    protected $fillable = [
        'jenis_sampah',
        'harga_per_kilo',
    ];
}
