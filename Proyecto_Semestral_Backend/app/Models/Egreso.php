<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    use HasFactory;

    protected $table = 'egresos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        "fecha_egreso"
    ];

    public function egreCentroDID()
    {
        return $this->belongsTo(Medicamento::class, "egre");
    }

    public function egreFarmaciaID()
    {
        return $this->belongsTo(CentroDistribucion::class, "scd_centro_distribucion_id");
    }
}
