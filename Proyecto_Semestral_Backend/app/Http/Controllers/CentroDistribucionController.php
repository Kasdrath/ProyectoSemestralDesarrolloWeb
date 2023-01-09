<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MainRepository;

class CentroDistribucionController extends Controller
{
    protected MainRepository $mainRepo;
    public function __construct(MainRepository $mainRepo)
    {
        $this->mainRepo = $mainRepo;
    }

    public function agregarCentroID(Request $request)
    {
    }

    public function stockCentroD(Request $request)
    {
        return $this->mainRepo->stockCentroD($request);
    }
}
