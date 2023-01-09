<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MainRepository;

class MedicamentoController extends Controller
{
    protected MainRepository $mainRepo;
    public function __construct(MainRepository $mainRepo)
    {
        $this->mainRepo = $mainRepo;
    }
}
