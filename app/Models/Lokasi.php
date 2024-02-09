<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    //definisikan table
    protected $table = "lokasi";
    protected $fillable = ["nama_lokasi"];
}