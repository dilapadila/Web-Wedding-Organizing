<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket';

    protected $fillable = [
        'id',
        'id_vendor',
        'nama_paket',
        'gambar',
        'deskripsi',
        'lampiran',
        'lampiran_nama'

    ];

    protected $casts = [
        'lampiran' => 'array',
        'lampiran_nama' => 'array',
 
    ];

    public function Vendor(): BelongsTo
    {
        return $this->belongsTo(vendor::class, 'id_vendor', 'id');
    }
}
