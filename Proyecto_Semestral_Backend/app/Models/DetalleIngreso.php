<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    use HasFactory;

    protected $table = 'detalleingresos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        "ingre_cantidad"
    ];

    public function ingreMedicamentoID()
    {
        return $this->belongsTo(DetalleIngreso::class, "ingre_medicamento_id");
    }

    public function ingresoID()
    {
        return $this->belongsTo(DetalleIngreso::class, "ingreso_id");
    }
}
