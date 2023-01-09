<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traspaso extends Model
{
    use HasFactory;

    protected $table = 'traspasos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function trasCentroDID()
    {
        return $this->belongsTo(Traspaso::class, "tras_centro_distribucion_id");
    }
}
