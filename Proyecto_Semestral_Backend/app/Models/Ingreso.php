<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    protected $table = 'ingresos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        "fecha_ingreso"
    ];

    public function ingreCentroDID()
    {
        return $this->belongsTo(Ingreso::class, "ingre_centro_distribucion_id");
    }
}
