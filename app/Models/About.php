<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    //definisikan table
    protected $table = "about";
    protected $fillable = ["judul", "sub_judul", "gambar", "deskripsi"];
}
