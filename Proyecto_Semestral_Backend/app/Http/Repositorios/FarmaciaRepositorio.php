<?php
namespace App\Repositorios;
use App\Models\Farmacia;

class FarmaciaRepositorio {

    public function registrarFarmacia($request){
        $farma = new Farmacia();
        $farma->save();
        return 'ok';
    }

}