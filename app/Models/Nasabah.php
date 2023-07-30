<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nasabah extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'nasabah';

    protected $fillable = [
        'tanggal_transaksi',
        'nama_nasabah',
        'jenis_sampah_id',
        'berat_sampah',
    ];

    public function jenisSampah()
    {
        return $this->belongsTo(BankSampah::class, 'jenis_sampah_id')->withTrashed();
    }
}
