<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleEgreso extends Model
{
    use HasFactory;

    protected $table = 'detalleegresos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        "egre_cantidad"
    ];

    public function detalleegreMedicamentoID()
    {
        return $this->belongsTo(DetalleEgreso::class, "egre_medicamento_id");
    }

    public function detalleegreID()
    {
        return $this->belongsTo(DetalleEgreso::class, "egreso_id");
    }
}
