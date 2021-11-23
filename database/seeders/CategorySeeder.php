<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Casa independiente',
            'description'=>'Vivienda particular de construcción fija que generalmente no comparte pared, techo o piso con otra vivienda',
             'terreno_size'=>'10X20m cuadrados'
        ]);
        Category::create([
            'name'=>'Chalet adosado',
            'description'=>'Son un grupo de viviendas construidas en hilera y pegadas unas a otras mediante una pared medianera, comparte jardin',
             'terreno_size'=>'10X12m cuadrados'
        ]);
        Category::create([
            'name'=>'Chalet pareado',
            'description'=>'Es parecida a una adosada, solo que en este caso uno de sus laterales no está flanqueado por otra construcción, por lo que suele disponer de un jardín de mayor tamaño. ',
             'terreno_size'=>'10X15m cuadrados'
        ]);
        Category::create([
            'name'=>'Apartamento',
            'description'=>'Es parecida a una adosada, solo que en este caso uno de sus laterales no está flanqueado por otra construcción, por lo que suele disponer de un jardín de mayor tamaño. ',
             'terreno_size'=>'8X8m cuadrados'
        ]);
        Category::create([
            'name'=>'Estudio. ',
            'description'=>'Es una vivienda en la que cocina, salón y dormitorio comparten estancia. Generalmente se trata de inmuebles pequeños, aunque su tamaño puede ser diverso. ',
             'terreno_size'=>'10X11m cuadrados'
        ]);
        Category::create([
            'name'=>'Piso',
            'description'=>'Es un inmueble ubicado en un edificio con zonas o servicios comunes. Puede tener varios dormitorios y estar situado en diferentes plantas ',
             'terreno_size'=>'8X9m cuadrados'
        ]);
        Category::create([
            'name'=>'Duplex',
            'description'=>'Vivienda de dos plantas que se comunican mediante una escalera interior. En algunos casos, pueden ser tríplex, si unen tres plantas o quadplex o fourplex si unen hasta cuatro plantas. ',
             'terreno_size'=>'9X11m cuadrados'
        ]);
        Category::create([
            'name'=>'Atico',
            'description'=>'Es el último piso de un edificio. Suelen ser los primeros en venderse y los más caros debido a su mayor demanda. ',
             'terreno_size'=>'10X16m cuadrados'
        ]);

    }
}
