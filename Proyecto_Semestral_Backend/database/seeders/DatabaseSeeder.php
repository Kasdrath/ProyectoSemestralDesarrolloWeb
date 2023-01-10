<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CentroDistribucion;
use App\Models\Farmacia;
use App\Models\Medicamento;
use Illuminate\Database\Seeder;
use Database\Factories\CentroDistribucionFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $centrod = CentroDistribucion::factory(10)->create();
        $farmacia = Farmacia::factory(10)->create();
        $medicamento = Medicamento::factory(10)->create();
    }
}
