<?php

namespace Database\Seeders;

use App\Models\Comedore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Comedore::factory(50)->create();
        $Comedore1 = new Comedore;
        $Comedore1->name = 'bramon';
        $Comedore1->fecha = now();
        $Comedore1->platos_diarios = 0;
        $Comedore1->platos_acumulados = 0;
        $Comedore1->save();

        $Comedore2 = new Comedore;
        $Comedore2->name = 'palmita';
        $Comedore2->fecha = now();
        $Comedore2->platos_diarios = 0;
        $Comedore2->platos_acumulados = 0;
        $Comedore2->save();

        $Comedore3 = new Comedore;
        $Comedore3->name = '5patio';
        $Comedore3->fecha = now();
        $Comedore3->platos_diarios = 0;
        $Comedore3->platos_acumulados = 0;
        $Comedore3->save();
        //$vivere->name = 'Carne';
        // $vivere->cantidad = 15;
        // $vivere->unidad_medida = 'Kilos';
        // $vivere->ubicacion = 'bramon';
        // $vivere->save();
    }
}
