<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    protected $primaryKey = "id_aspirasi";

    protected $fillable = ["id_pelaporan", "status", "feedback"];

    public function input_aspirasis(){
        return $this->belongsTo(InputAspirasi::class, "id_pelaporan");
    }

}
