<?php

namespace App\Http\Repositorios;

use App\Models\CentroDistribucion;
use App\Models\Stock;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Exception;


class CentroDistribucionRepositorio
{

    public function agregarCentroID($request)
    {
        $centrod = new CentroDistribucion();
        $centrod->cd_codigo = $request->cd_codigo;
        $centrod->cd_direccion = $request->cd_direccion;
        $centrod->cd_telefono = $request->cd_telefono;
    }

    public function listaCD($request)
    {
        $centrod = CentroDistribucion::all();
        return $centrod;
    }

    public function mostrarStockCD($request)
    {
        $stock = Stock::where('id', $request)->get();
        return $stock[0]->cantidad;
        /*foreach ($stock as $stocks) {
            if ($stocks->scd_centro_distribucion_id == $request) {
                return $stocks->cantidad;
            }
        }*/
    }
}
