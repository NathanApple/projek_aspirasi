<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputAspirasi extends Model
{
    use HasFactory;
    protected $primaryKey = "id_pelaporan";
    protected $fillable = ["lokasi", "gambar", "keterangan", "id_kategori", "nik"];

    public function penduduks(){
        return $this->belongsTo(Penduduk::class, "nik");
    }

    public function kategoris(){
        return $this->belongsTo(Kategori::class, "id_kategori");
    }

}
