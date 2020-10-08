<?php

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'nombre' => 'Comidas'
            ],
            [
                'nombre' => 'Bebidas'
            ]
        );

        Categoria::insert($data);
    }
}
