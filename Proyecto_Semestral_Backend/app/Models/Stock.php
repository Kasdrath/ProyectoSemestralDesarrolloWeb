<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        "cantidad"
    ];

    public function scdMedicamentoID()
    {
        return $this->belongsTo(Medicamento::class, "scd_medicamento_id");
    }

    public function scdCentroID()
    {
        return $this->belongsTo(CentroDistribucion::class, "scd_centro_distribucion_id");
    }
}
