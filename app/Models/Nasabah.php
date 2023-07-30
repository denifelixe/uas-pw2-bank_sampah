<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $table = 'nasabah';

    protected $fillable = [
        'tanggal_transaksi',
        'nama_nasabah',
        'jenis_sampah_id',
        'berat_sampah',
    ];

    public function jenisSampah()
    {
        return $this->belongsTo(BankSampah::class, 'jenis_sampah_id');
    }
}
