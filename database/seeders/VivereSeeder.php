<?php

namespace Database\Seeders;

use App\Models\Vivere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VivereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vivere::factory(50)->create();
        //5Ptio
        $vivere = new Vivere;
        $vivere->name = 'Arroz';
        $vivere->cantidad = 10;
        $vivere->unidad_medida = 'Kilos';
        $vivere->ubicacion = '5patio';
        $vivere->save();

        $vivere1 = new Vivere;
        $vivere1->name = 'Pasta';
        $vivere1->cantidad = 12;
        $vivere1->unidad_medida = 'Kilos';
        $vivere1->ubicacion = '5patio';
        $vivere1->save();

        $vivere2 = new Vivere;
        $vivere2->name = 'Harina Pan';
        $vivere2->cantidad = 6;
        $vivere2->unidad_medida = 'Kilos';
        $vivere2->ubicacion = '5patio';
        $vivere2->save();

        $vivere3 = new Vivere;
        $vivere3->name = 'Sal';
        $vivere3->cantidad = 4;
        $vivere3->unidad_medida = 'Kilos';
        $vivere3->ubicacion = '5patio';
        $vivere3->save();

        $vivere4 = new Vivere;
        $vivere4->name = 'Aceite';
        $vivere4->cantidad = 4;
        $vivere4->unidad_medida = 'Litros';
        $vivere4->ubicacion = '5patio';
        $vivere4->save();

        $vivere5 = new Vivere;
        $vivere5->name = 'Huevos';
        $vivere5->cantidad = 240;
        $vivere5->unidad_medida = 'unidades';
        $vivere5->ubicacion = '5patio';
        $vivere5->save();

        $vivere6 = new Vivere;
        $vivere6->name = 'Queso';
        $vivere6->cantidad = 10;
        $vivere6->unidad_medida = 'Kilos';
        $vivere6->ubicacion = '5patio';
        $vivere6->save();

        $vivere7 = new Vivere;
        $vivere7->name = 'Carne Molida';
        $vivere7->cantidad = 6;
        $vivere7->unidad_medida = 'Kilos';
        $vivere7->ubicacion = '5patio';
        $vivere7->save();

        $vivere8 = new Vivere;
        $vivere8->name = 'Costilla';
        $vivere8->cantidad = 0;
        $vivere8->unidad_medida = 'Kilos';
        $vivere8->ubicacion = '5patio';
        $vivere8->save();

        $vivere9 = new Vivere;
        $vivere9->name = 'Pollo';
        $vivere9->cantidad = 10.8;
        $vivere9->unidad_medida = 'Kilos';
        $vivere9->ubicacion = '5patio';
        $vivere9->save();

        $vivere10 = new Vivere;
        $vivere10->name = 'Jabon';
        $vivere10->cantidad = 0;
        $vivere10->unidad_medida = 'Litros';
        $vivere10->ubicacion = '5patio';
        $vivere10->save();

        $vivere11 = new Vivere;
        $vivere11->name = 'Cloro';
        $vivere11->cantidad = 0;
        $vivere11->unidad_medida = 'Litros';
        $vivere11->ubicacion = '5patio';
        $vivere11->save();

        $vivere12 = new Vivere;
        $vivere12->name = 'Papa';
        $vivere12->cantidad = 27.45;
        $vivere12->unidad_medida = 'Kilos';
        $vivere12->ubicacion = '5patio';
        $vivere12->save();

        $vivere13 = new Vivere;
        $vivere13->name = 'Vainita';
        $vivere13->cantidad = 0;
        $vivere13->unidad_medida = 'Kilos';
        $vivere13->ubicacion = '5patio';
        $vivere13->save();

        $vivere14 = new Vivere;
        $vivere14->name = 'Apio';
        $vivere14->cantidad = 0;
        $vivere14->unidad_medida = 'Kilos';
        $vivere14->ubicacion = '5patio';
        $vivere14->save();

        $vivere15 = new Vivere;
        $vivere15->name = 'Platano';
        $vivere15->cantidad = 16.2;
        $vivere15->unidad_medida = 'Kilos';
        $vivere15->ubicacion = '5patio';
        $vivere15->save();

        $vivere16 = new Vivere;
        $vivere16->name = 'Remolacha';
        $vivere16->cantidad = 5.7;
        $vivere16->unidad_medida = 'Kilos';
        $vivere16->ubicacion = '5patio';
        $vivere16->save();

        $vivere17 = new Vivere;
        $vivere17->name = 'Cebolla';
        $vivere17->cantidad = 5.27;
        $vivere17->unidad_medida = 'Kilos';
        $vivere17->ubicacion = '5patio';
        $vivere17->save();

        $vivere18 = new Vivere;
        $vivere18->name = 'Pimenton';
        $vivere18->cantidad = 2.45;
        $vivere18->unidad_medida = 'Kilos';
        $vivere18->ubicacion = '5patio';
        $vivere18->save();

        $vivere19 = new Vivere;
        $vivere19->name = 'Tomate';
        $vivere19->cantidad = 5.37;
        $vivere19->unidad_medida = 'Kilos';
        $vivere19->ubicacion = '5patio';
        $vivere19->save();

        $vivere20 = new Vivere;
        $vivere20->name = 'Ajo Porro';
        $vivere20->cantidad = 2.175;
        $vivere20->unidad_medida = 'Kilos';
        $vivere20->ubicacion = '5patio';
        $vivere20->save();

        $vivere21 = new Vivere;
        $vivere21->name = 'Celery';
        $vivere21->cantidad = 1;
        $vivere21->unidad_medida = 'Kilos';
        $vivere21->ubicacion = '5patio';
        $vivere21->save();

        $vivere22 = new Vivere;
        $vivere22->name = 'Aji Dulce';
        $vivere22->cantidad = 2;
        $vivere22->unidad_medida = 'Kilos';
        $vivere22->ubicacion = '5patio';
        $vivere22->save();

        $vivere23 = new Vivere;
        $vivere23->name = 'Zanahoria';
        $vivere23->cantidad = 22.9;
        $vivere23->unidad_medida = 'Kilos';
        $vivere23->ubicacion = '5patio';
        $vivere23->save();

        $vivere24 = new Vivere;
        $vivere24->name = 'Cebollin';
        $vivere24->cantidad = 21.5;
        $vivere24->unidad_medida = 'Kilos';
        $vivere24->ubicacion = '5patio';
        $vivere24->save();

        $vivere25 = new Vivere;
        $vivere25->name = 'Auyama';
        $vivere25->cantidad = 20.4;
        $vivere25->unidad_medida = 'Kilos';
        $vivere25->ubicacion = '5patio';
        $vivere25->save();

        $vivere26 = new Vivere;
        $vivere26->name = 'Calabacin';
        $vivere26->cantidad = 14.5;
        $vivere26->unidad_medida = 'Kilos';
        $vivere26->ubicacion = '5patio';
        $vivere26->save();

        $vivere27 = new Vivere;
        $vivere27->name = 'Yuca';
        $vivere27->cantidad = 0;
        $vivere27->unidad_medida = 'Kilos';
        $vivere27->ubicacion = '5patio';
        $vivere27->save();

        $vivere28 = new Vivere;
        $vivere28->name = 'Granos';
        $vivere28->cantidad = 10;
        $vivere28->unidad_medida = 'Kilos';
        $vivere28->ubicacion = '5patio';
        $vivere28->save();

        $vivere29 = new Vivere;
        $vivere29->name = 'Repollo';
        $vivere29->cantidad = 7.45;
        $vivere29->unidad_medida = 'Kilos';
        $vivere29->ubicacion = '5patio';
        $vivere29->save();

        $vivere30 = new Vivere;
        $vivere30->name = 'Azucar';
        $vivere30->cantidad = 0;
        $vivere30->unidad_medida = 'Kilos';
        $vivere30->ubicacion = '5patio';
        $vivere30->save();

        $vivere31 = new Vivere;
        $vivere31->name = 'Cilantro';
        $vivere31->cantidad = 0;
        $vivere31->unidad_medida = 'Kilos';
        $vivere31->ubicacion = '5patio';
        $vivere31->save();

        $vivere32 = new Vivere;
        $vivere32->name = 'Jojoto';
        $vivere32->cantidad = 1.2;
        $vivere32->unidad_medida = 'Kilos';
        $vivere32->ubicacion = '5patio';
        $vivere32->save();

        $vivere33 = new Vivere;
        $vivere33->name = 'Naranja';
        $vivere33->cantidad = 0;
        $vivere33->unidad_medida = 'Kilos';
        $vivere33->ubicacion = '5patio';
        $vivere33->save();

        $vivere34 = new Vivere;
        $vivere34->name = 'Ajo';
        $vivere34->cantidad = 0;
        $vivere34->unidad_medida = 'Kilos';
        $vivere34->ubicacion = '5patio';
        $vivere34->save();

        $vivere35 = new Vivere;
        $vivere35->name = 'Lactovisoy';
        $vivere35->cantidad = 10;
        $vivere35->unidad_medida = 'Kilos';
        $vivere35->ubicacion = '5patio';
        $vivere35->save();

        // Bramon
        $vive1re = new Vivere;
        $vive1re->name = 'Arroz';
        $vive1re->cantidad = 10;
        $vive1re->unidad_medida = 'Kilos';
        $vive1re->ubicacion = 'bramon';
        $vive1re->save();

        $viver1e1 = new Vivere;
        $viver1e1->name = 'Pasta';
        $viver1e1->cantidad = 12;
        $viver1e1->unidad_medida = 'Kilos';
        $viver1e1->ubicacion = 'bramon';
        $viver1e1->save();

        $viver1e2 = new Vivere;
        $viver1e2->name = 'Harina Pan';
        $viver1e2->cantidad = 6;
        $viver1e2->unidad_medida = 'Kilos';
        $viver1e2->ubicacion = 'bramon';
        $viver1e2->save();

        $viver1e3 = new Vivere;
        $viver1e3->name = 'Sal';
        $viver1e3->cantidad = 4;
        $viver1e3->unidad_medida = 'Kilos';
        $viver1e3->ubicacion = 'bramon';
        $viver1e3->save();

        $viver1e4 = new Vivere;
        $viver1e4->name = 'Aceite';
        $viver1e4->cantidad = 4;
        $viver1e4->unidad_medida = 'Litros';
        $viver1e4->ubicacion = 'bramon';
        $viver1e4->save();

        $viver1e5 = new Vivere;
        $viver1e5->name = 'Huevos';
        $viver1e5->cantidad = 240;
        $viver1e5->unidad_medida = 'unidades';
        $viver1e5->ubicacion = 'bramon';
        $viver1e5->save();

        $viver1e6 = new Vivere;
        $viver1e6->name = 'Queso';
        $viver1e6->cantidad = 10;
        $viver1e6->unidad_medida = 'Kilos';
        $viver1e6->ubicacion = 'bramon';
        $viver1e6->save();

        $viver1e7 = new Vivere;
        $viver1e7->name = 'Carne Molida';
        $viver1e7->cantidad = 6;
        $viver1e7->unidad_medida = 'Kilos';
        $viver1e7->ubicacion = 'bramon';
        $viver1e7->save();

        $viver1e8 = new Vivere;
        $viver1e8->name = 'Costilla';
        $viver1e8->cantidad = 0;
        $viver1e8->unidad_medida = 'Kilos';
        $viver1e8->ubicacion = 'bramon';
        $viver1e8->save();

        $viver1e9 = new Vivere;
        $viver1e9->name = 'Pollo';
        $viver1e9->cantidad = 10.8;
        $viver1e9->unidad_medida = 'Kilos';
        $viver1e9->ubicacion = 'bramon';
        $viver1e9->save();

        $vivere110 = new Vivere;
        $vivere110->name = 'Jabon';
        $vivere110->cantidad = 0;
        $vivere110->unidad_medida = 'Litros';
        $vivere110->ubicacion = 'bramon';
        $vivere110->save();

        $vivere111 = new Vivere;
        $vivere111->name = 'Cloro';
        $vivere111->cantidad = 0;
        $vivere111->unidad_medida = 'Litros';
        $vivere111->ubicacion = 'bramon';
        $vivere111->save();

        $vivere112 = new Vivere;
        $vivere112->name = 'Papa';
        $vivere112->cantidad = 27.45;
        $vivere112->unidad_medida = 'Kilos';
        $vivere112->ubicacion = 'bramon';
        $vivere112->save();

        $vivere113 = new Vivere;
        $vivere113->name = 'Vainita';
        $vivere113->cantidad = 0;
        $vivere113->unidad_medida = 'Kilos';
        $vivere113->ubicacion = 'bramon';
        $vivere113->save();

        $vivere114 = new Vivere;
        $vivere114->name = 'Apio';
        $vivere114->cantidad = 0;
        $vivere114->unidad_medida = 'Kilos';
        $vivere114->ubicacion = 'bramon';
        $vivere114->save();

        $vivere115 = new Vivere;
        $vivere115->name = 'Platano';
        $vivere115->cantidad = 16.2;
        $vivere115->unidad_medida = 'Kilos';
        $vivere115->ubicacion = 'bramon';
        $vivere115->save();

        $vivere116 = new Vivere;
        $vivere116->name = 'Remolacha';
        $vivere116->cantidad = 5.7;
        $vivere116->unidad_medida = 'Kilos';
        $vivere116->ubicacion = 'bramon';
        $vivere116->save();

        $vivere117 = new Vivere;
        $vivere117->name = 'Cebolla';
        $vivere117->cantidad = 5.27;
        $vivere117->unidad_medida = 'Kilos';
        $vivere117->ubicacion = 'bramon';
        $vivere117->save();

        $vivere118 = new Vivere;
        $vivere118->name = 'Pimenton';
        $vivere118->cantidad = 2.45;
        $vivere118->unidad_medida = 'Kilos';
        $vivere118->ubicacion = 'bramon';
        $vivere118->save();

        $vivere119 = new Vivere;
        $vivere119->name = 'Tomate';
        $vivere119->cantidad = 5.37;
        $vivere119->unidad_medida = 'Kilos';
        $vivere119->ubicacion = 'bramon';
        $vivere119->save();

        $vivere120 = new Vivere;
        $vivere120->name = 'Ajo Porro';
        $vivere120->cantidad = 2.175;
        $vivere120->unidad_medida = 'Kilos';
        $vivere120->ubicacion = 'bramon';
        $vivere120->save();

        $vivere121 = new Vivere;
        $vivere121->name = 'Celery';
        $vivere121->cantidad = 1;
        $vivere121->unidad_medida = 'Kilos';
        $vivere121->ubicacion = 'bramon';
        $vivere121->save();

        $vivere122 = new Vivere;
        $vivere122->name = 'Aji Dulce';
        $vivere122->cantidad = 2;
        $vivere122->unidad_medida = 'Kilos';
        $vivere122->ubicacion = 'bramon';
        $vivere122->save();

        $vivere123 = new Vivere;
        $vivere123->name = 'Zanahoria';
        $vivere123->cantidad = 22.9;
        $vivere123->unidad_medida = 'Kilos';
        $vivere123->ubicacion = 'bramon';
        $vivere123->save();

        $vivere124 = new Vivere;
        $vivere124->name = 'Cebollin';
        $vivere124->cantidad = 21.5;
        $vivere124->unidad_medida = 'Kilos';
        $vivere124->ubicacion = 'bramon';
        $vivere124->save();

        $vivere125 = new Vivere;
        $vivere125->name = 'Auyama';
        $vivere125->cantidad = 20.4;
        $vivere125->unidad_medida = 'Kilos';
        $vivere125->ubicacion = 'bramon';
        $vivere125->save();

        $vivere126 = new Vivere;
        $vivere126->name = 'Calabacin';
        $vivere126->cantidad = 14.5;
        $vivere126->unidad_medida = 'Kilos';
        $vivere126->ubicacion = 'bramon';
        $vivere126->save();

        $vivere127 = new Vivere;
        $vivere127->name = 'Yuca';
        $vivere127->cantidad = 0;
        $vivere127->unidad_medida = 'Kilos';
        $vivere127->ubicacion = 'bramon';
        $vivere127->save();

        $vivere128 = new Vivere;
        $vivere128->name = 'Granos';
        $vivere128->cantidad = 10;
        $vivere128->unidad_medida = 'Kilos';
        $vivere128->ubicacion = 'bramon';
        $vivere128->save();

        $vivere129 = new Vivere;
        $vivere129->name = 'Repollo';
        $vivere129->cantidad = 7.45;
        $vivere129->unidad_medida = 'Kilos';
        $vivere129->ubicacion = 'bramon';
        $vivere129->save();

        $vivere130 = new Vivere;
        $vivere130->name = 'Azucar';
        $vivere130->cantidad = 0;
        $vivere130->unidad_medida = 'Kilos';
        $vivere130->ubicacion = 'bramon';
        $vivere130->save();

        $vivere131 = new Vivere;
        $vivere131->name = 'Cilantro';
        $vivere131->cantidad = 0;
        $vivere131->unidad_medida = 'Kilos';
        $vivere131->ubicacion = 'bramon';
        $vivere131->save();

        $vivere132 = new Vivere;
        $vivere132->name = 'Jojoto';
        $vivere132->cantidad = 1.2;
        $vivere132->unidad_medida = 'Kilos';
        $vivere132->ubicacion = 'bramon';
        $vivere132->save();

        $vivere133 = new Vivere;
        $vivere133->name = 'Naranja';
        $vivere133->cantidad = 0;
        $vivere133->unidad_medida = 'Kilos';
        $vivere133->ubicacion = 'bramon';
        $vivere133->save();

        $vivere134 = new Vivere;
        $vivere134->name = 'Ajo';
        $vivere134->cantidad = 0;
        $vivere134->unidad_medida = 'Kilos';
        $vivere134->ubicacion = 'bramon';
        $vivere134->save();

        $vivere135 = new Vivere;
        $vivere135->name = 'Lactovisoy';
        $vivere135->cantidad = 10;
        $vivere135->unidad_medida = 'Kilos';
        $vivere135->ubicacion = 'bramon';
        $vivere135->save();

        // Palmita
        $vive2re = new Vivere;
        $vive2re->name = 'Arroz';
        $vive2re->cantidad = 10;
        $vive2re->unidad_medida = 'Kilos';
        $vive2re->ubicacion = 'palmita';
        $vive2re->save();

        $viver2e1 = new Vivere;
        $viver2e1->name = 'Pasta';
        $viver2e1->cantidad = 12;
        $viver2e1->unidad_medida = 'Kilos';
        $viver2e1->ubicacion = 'palmita';
        $viver2e1->save();

        $viver2e2 = new Vivere;
        $viver2e2->name = 'Harina Pan';
        $viver2e2->cantidad = 6;
        $viver2e2->unidad_medida = 'Kilos';
        $viver2e2->ubicacion = 'palmita';
        $viver2e2->save();

        $viver2e3 = new Vivere;
        $viver2e3->name = 'Sal';
        $viver2e3->cantidad = 4;
        $viver2e3->unidad_medida = 'Kilos';
        $viver2e3->ubicacion = 'palmita';
        $viver2e3->save();

        $viver2e4 = new Vivere;
        $viver2e4->name = 'Aceite';
        $viver2e4->cantidad = 4;
        $viver2e4->unidad_medida = 'Litros';
        $viver2e4->ubicacion = 'palmita';
        $viver2e4->save();

        $viver2e5 = new Vivere;
        $viver2e5->name = 'Huevos';
        $viver2e5->cantidad = 240;
        $viver2e5->unidad_medida = 'unidades';
        $viver2e5->ubicacion = 'palmita';
        $viver2e5->save();

        $viver2e6 = new Vivere;
        $viver2e6->name = 'Queso';
        $viver2e6->cantidad = 10;
        $viver2e6->unidad_medida = 'Kilos';
        $viver2e6->ubicacion = 'palmita';
        $viver2e6->save();

        $viver2e7 = new Vivere;
        $viver2e7->name = 'Carne Molida';
        $viver2e7->cantidad = 6;
        $viver2e7->unidad_medida = 'Kilos';
        $viver2e7->ubicacion = 'palmita';
        $viver2e7->save();

        $viver2e8 = new Vivere;
        $viver2e8->name = 'Costilla';
        $viver2e8->cantidad = 0;
        $viver2e8->unidad_medida = 'Kilos';
        $viver2e8->ubicacion = 'palmita';
        $viver2e8->save();

        $viver2e9 = new Vivere;
        $viver2e9->name = 'Pollo';
        $viver2e9->cantidad = 10.8;
        $viver2e9->unidad_medida = 'Kilos';
        $viver2e9->ubicacion = 'palmita';
        $viver2e9->save();

        $vivere210 = new Vivere;
        $vivere210->name = 'Jabon';
        $vivere210->cantidad = 0;
        $vivere210->unidad_medida = 'Litros';
        $vivere210->ubicacion = 'palmita';
        $vivere210->save();

        $vivere211 = new Vivere;
        $vivere211->name = 'Cloro';
        $vivere211->cantidad = 0;
        $vivere211->unidad_medida = 'Litros';
        $vivere211->ubicacion = 'palmita';
        $vivere211->save();

        $vivere212 = new Vivere;
        $vivere212->name = 'Papa';
        $vivere212->cantidad = 27.45;
        $vivere212->unidad_medida = 'Kilos';
        $vivere212->ubicacion = 'palmita';
        $vivere212->save();

        $vivere213 = new Vivere;
        $vivere213->name = 'Vainita';
        $vivere213->cantidad = 0;
        $vivere213->unidad_medida = 'Kilos';
        $vivere213->ubicacion = 'palmita';
        $vivere213->save();

        $vivere214 = new Vivere;
        $vivere214->name = 'Apio';
        $vivere214->cantidad = 0;
        $vivere214->unidad_medida = 'Kilos';
        $vivere214->ubicacion = 'palmita';
        $vivere214->save();

        $vivere215 = new Vivere;
        $vivere215->name = 'Platano';
        $vivere215->cantidad = 16.2;
        $vivere215->unidad_medida = 'Kilos';
        $vivere215->ubicacion = 'palmita';
        $vivere215->save();

        $vivere216 = new Vivere;
        $vivere216->name = 'Remolacha';
        $vivere216->cantidad = 5.7;
        $vivere216->unidad_medida = 'Kilos';
        $vivere216->ubicacion = 'palmita';
        $vivere216->save();

        $vivere217 = new Vivere;
        $vivere217->name = 'Cebolla';
        $vivere217->cantidad = 5.27;
        $vivere217->unidad_medida = 'Kilos';
        $vivere217->ubicacion = 'palmita';
        $vivere217->save();

        $vivere218 = new Vivere;
        $vivere218->name = 'Pimenton';
        $vivere218->cantidad = 2.45;
        $vivere218->unidad_medida = 'Kilos';
        $vivere218->ubicacion = 'palmita';
        $vivere218->save();

        $vivere219 = new Vivere;
        $vivere219->name = 'Tomate';
        $vivere219->cantidad = 5.37;
        $vivere219->unidad_medida = 'Kilos';
        $vivere219->ubicacion = 'palmita';
        $vivere219->save();

        $vivere220 = new Vivere;
        $vivere220->name = 'Ajo Porro';
        $vivere220->cantidad = 2.175;
        $vivere220->unidad_medida = 'Kilos';
        $vivere220->ubicacion = 'palmita';
        $vivere220->save();

        $vivere221 = new Vivere;
        $vivere221->name = 'Celery';
        $vivere221->cantidad = 1;
        $vivere221->unidad_medida = 'Kilos';
        $vivere221->ubicacion = 'palmita';
        $vivere221->save();

        $vivere222 = new Vivere;
        $vivere222->name = 'Aji Dulce';
        $vivere222->cantidad = 2;
        $vivere222->unidad_medida = 'Kilos';
        $vivere222->ubicacion = 'palmita';
        $vivere222->save();

        $vivere223 = new Vivere;
        $vivere223->name = 'Zanahoria';
        $vivere223->cantidad = 22.9;
        $vivere223->unidad_medida = 'Kilos';
        $vivere223->ubicacion = 'palmita';
        $vivere223->save();

        $vivere224 = new Vivere;
        $vivere224->name = 'Cebollin';
        $vivere224->cantidad = 21.5;
        $vivere224->unidad_medida = 'Kilos';
        $vivere224->ubicacion = 'palmita';
        $vivere224->save();

        $vivere225 = new Vivere;
        $vivere225->name = 'Auyama';
        $vivere225->cantidad = 20.4;
        $vivere225->unidad_medida = 'Kilos';
        $vivere225->ubicacion = 'palmita';
        $vivere225->save();

        $vivere226 = new Vivere;
        $vivere226->name = 'Calabacin';
        $vivere226->cantidad = 14.5;
        $vivere226->unidad_medida = 'Kilos';
        $vivere226->ubicacion = 'palmita';
        $vivere226->save();

        $vivere227 = new Vivere;
        $vivere227->name = 'Yuca';
        $vivere227->cantidad = 0;
        $vivere227->unidad_medida = 'Kilos';
        $vivere227->ubicacion = 'palmita';
        $vivere227->save();

        $vivere228 = new Vivere;
        $vivere228->name = 'Granos';
        $vivere228->cantidad = 10;
        $vivere228->unidad_medida = 'Kilos';
        $vivere228->ubicacion = 'palmita';
        $vivere228->save();

        $vivere229 = new Vivere;
        $vivere229->name = 'Repollo';
        $vivere229->cantidad = 7.45;
        $vivere229->unidad_medida = 'Kilos';
        $vivere229->ubicacion = 'palmita';
        $vivere229->save();

        $vivere230 = new Vivere;
        $vivere230->name = 'Azucar';
        $vivere230->cantidad = 0;
        $vivere230->unidad_medida = 'Kilos';
        $vivere230->ubicacion = 'palmita';
        $vivere230->save();

        $vivere231 = new Vivere;
        $vivere231->name = 'Cilantro';
        $vivere231->cantidad = 0;
        $vivere231->unidad_medida = 'Kilos';
        $vivere231->ubicacion = 'palmita';
        $vivere231->save();

        $vivere232 = new Vivere;
        $vivere232->name = 'Jojoto';
        $vivere232->cantidad = 1.2;
        $vivere232->unidad_medida = 'Kilos';
        $vivere232->ubicacion = 'palmita';
        $vivere232->save();

        $vivere233 = new Vivere;
        $vivere233->name = 'Naranja';
        $vivere233->cantidad = 0;
        $vivere233->unidad_medida = 'Kilos';
        $vivere233->ubicacion = 'palmita';
        $vivere233->save();

        $vivere234 = new Vivere;
        $vivere234->name = 'Ajo';
        $vivere234->cantidad = 0;
        $vivere234->unidad_medida = 'Kilos';
        $vivere234->ubicacion = 'palmita';
        $vivere234->save();

        $vivere235 = new Vivere;
        $vivere235->name = 'Lactovisoy';
        $vivere235->cantidad = 10;
        $vivere235->unidad_medida = 'Kilos';
        $vivere235->ubicacion = 'palmita';
        $vivere235->save();
    }
}

        // $vivere = new Vivere;
        // $vivere->name = 'Carne';
        // $vivere->cantidad = 15;
        // $vivere->unidad_medida = 'Kilos';
        // $vivere->ubicacion = 'bramon';
        // $vivere->save();