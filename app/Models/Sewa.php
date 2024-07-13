<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 'sewa';

    protected $fillable = [
        'no_pol',
        'tgl_sewa',
        'tgl_selesai',
        'tlp_tujuan',
        'alamat_tujuan',
        'biaya_sewa',
        'kota',
        'id_penyewa',
        'jlh_penumpang',
        'id_kwitansi',
    ];

    protected $primaryKey = 'id_sewa';

    /**
     * Get the pol associated with the sewa.
     */
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'no_pol');
    }

    /**
     * Get the penyewa associated with the sewa.
     */
    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa');
    }

    /**
     * Get the kwitansi associated with the sewa.
     */
    public function kwitansi()
    {
        return $this->belongsTo(Kwitansi::class, 'id_kwitansi');
    }
}
