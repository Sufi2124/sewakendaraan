<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';

    protected $fillable = [
        'id_kwitansi',
        'id_penyewa',
        'no_pol',
    ];

    protected $primaryKey = 'id';

    /**
     * Get the kwitansi associated with the invoice.
     */
    public function kwitansi()
    {
        return $this->belongsTo(Kwitansi::class, 'id_kwitansi');
    }

    /**
     * Get the penyewa associated with the invoice.
     */
    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa');
    }

    /**
     * Get the pol associated with the invoice.
     */
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'no_pol');
    }
}
