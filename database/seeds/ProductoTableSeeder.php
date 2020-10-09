<?php


use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoTableSeeder extends Seeder
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
                'nombre' => 'Platos especiales',
                'precio' => '100',
                'categoria' => 'Comida'
            ],
            [
                'nombre' => 'Plantos enteros',
                'precio' => '80',
                'categoria' => 'Comida'
            ],
            [
                'nombre' => 'Platos medios',
                'precio' => '50',
                'categoria' => 'Comida'
            ],
            [
                'nombre' => 'Picantes',
                'precio' => '30',
                'categoria' => 'Comida'
            ],
            [
                'nombre' => 'Media negra',
                'precio' => '25',
                'categoria' => 'Comida'
            ],
            [
                'nombre' => 'Sopas',
                'precio' => '20',
                'categoria' => 'Comida'
            ],
            [
                'nombre' => 'Porciones',
                'precio' => '10',
                'categoria' => 'Comida'
            ],
            [
                'nombre' => 'Whisky Botella',
                'precio' => '500',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Ron Habana',
                'precio' => '250',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Fernet',
                'precio' => '200',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Singani',
                'precio' => '180',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Combo Paceña',
                'precio' => '100',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Combo Huari',
                'precio' => '100',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Vinos',
                'precio' => '50',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Whisky Vaso',
                'precio' => '30',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Jarra Garapiña',
                'precio' => '30',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Huari',
                'precio' => '28',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Paceña',
                'precio' => '25',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Soda 2Lts',
                'precio' => '20',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Agua 2Lts',
                'precio' => '15',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Soda 1/2 Lt',
                'precio' => '10',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Agua 1/2 Lt',
                'precio' => '10',
                'categoria' => 'Bebida'
            ],
            [
                'nombre' => 'Vaso Garapiña',
                'precio' => '10',
                'categoria' => 'Bebida'
            ],
        );

        Producto::insert($data);
    }
}
