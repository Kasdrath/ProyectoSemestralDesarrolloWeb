<?php

namespace App\Repositories;

use App\Models\CentroDistribucion;
use App\Models\Stock;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Exception;


class MainRepository
{

    public function agregarCentroID($request)
    {
        $centrod = new CentroDistribucion();
        $centrod->cd_codigo = $request->cd_codigo;
        $centrod->cd_direccion = $request->cd_direccion;
        $centrod->cd_telefono = $request->cd_telefono;
    }

    public function stockCentroD($request)
    {
        $centrod = CentroDistribucion::all();
        return $centrod;
    }
}
