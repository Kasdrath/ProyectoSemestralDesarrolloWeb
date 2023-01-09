<?php

namespace App\Repositories;

use App\Models\CentroDistribucion;
use App\Models\Stock;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Exception;


class MainRepository
{
    public function stockCentroD()
    {
        $centrod = CentroDistribucion::all();
        return $centrod;
    }
}
