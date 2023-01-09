<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTraspaso extends Model
{
    use HasFactory;

    protected $table = 'detalletraspasos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        "ingre_cantidad"
    ];


    public function trasCentroDID()
    {
        return $this->belongsTo(DetalleTraspaso::class, "tras_medicamento_id");
    }
    public function traspasoID()
    {
        return $this->belongsTo(DetalleTraspaso::class, "traspaso_id");
    }
}
