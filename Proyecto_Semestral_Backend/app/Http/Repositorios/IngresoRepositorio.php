<?php
namespace App\Repositorios;
use App\Models\Ingreso;
use App\Models\DetalleIngreso;
use App\Models\Stock;

class IngresoRepositorio{

    public function registrarIngreso($request){
        $ingreso = new Ingreso();
        $ingreso->fecha = $request->fecha;
        $ingreso->cd = $request->centro_distribucion_id;
        $ingreso->save();

        foreach($request->medicamentos as $medicamento){
            $detalle = new DetalleIngreso();
            $detalle->id_medicamento = $medicamento->id_medicamento;
            $detalle->cantidad = $medicamento->cantidad;
            $detalle->id_ingreso = $ingreso->id;

            $detalle->save();

            $stock_actual = Stock::where([
                ['id_medicamento', $medicamento->id_medicamento],
                ['centro_dist', $request->centro_distribucion_id]
            ])->first();

            if(is_null($stock_actual)){
                //TODO: Crear stock
            }else{
                //Sumar stock
                $stock_actual = Stock::where([
                    ['id_medicamento', $medicamento->id_medicamento],
                    ['centro_dist', $request->centro_distribucion_id]
                ])->increment('cantidad', $medicamento->cantidad);
            }
        }
    }

    public function listarDetalleIngreso($request){
        $detalle = DetalleIngreso::where('id_ingreso',$request->id)->with('medicamento');
    }

}