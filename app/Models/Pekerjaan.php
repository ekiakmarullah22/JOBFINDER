<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Pekerjaan extends Model
{
    use HasFactory;
    //definisikan table
    protected $table = "pekerjaan";
    protected $fillable = ["nama_pekerjaan", "gambar", "kategori_id", "lokasi_id", "besaran_gaji", "deskripsi", "nama_perusahaan", "durasi_lamaran", "tag"];

    public function lokasi(): BelongsTo
    {
        return $this->belongsTo(lokasi::class)->withDefault();
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class)->withDefault();
    }
}
