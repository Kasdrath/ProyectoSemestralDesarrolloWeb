<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositorios\CentroDistribucionRepositorio;

class CentroDistribucionController extends Controller
{
    protected CentroDistribucionRepositorio $cdRepo;
    public function __construct(CentroDistribucionRepositorio $cdRepo)
    {
        $this->cdRepo = $cdRepo;
    }

    public function listaCD(Request $request)
    {
        return $this->cdRepo->listaCD($request);
    }

    public function mostrarStock(Request $request)
    {
        return $this->cdRepo->mostrarStockCD($request->getContent());
    }
}
