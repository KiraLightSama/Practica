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
                'categoria_id' => '1'
            ],
            [
                'nombre' => 'Plantos enteros',
                'precio' => '80',
                'categoria_id' => '1'
            ],
            [
                'nombre' => 'Platos medios',
                'precio' => '50',
                'categoria_id' => '1'
            ],
            [
                'nombre' => 'Picantes',
                'precio' => '30',
                'categoria_id' => '1'
            ],
            [
                'nombre' => 'Media negra',
                'precio' => '25',
                'categoria_id' => '1'
            ],
            [
                'nombre' => 'Sopas',
                'precio' => '20',
                'categoria_id' => '1'
            ],
            [
                'nombre' => 'Porciones',
                'precio' => '10',
                'categoria_id' => '1'
            ],
            [
                'nombre' => 'Whisky Botella',
                'precio' => '500',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Ron Habana',
                'precio' => '250',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Fernet',
                'precio' => '200',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Singani',
                'precio' => '180',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Combo Paceña',
                'precio' => '100',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Combo Huari',
                'precio' => '100',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Vinos',
                'precio' => '50',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Whisky Vaso',
                'precio' => '30',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Jarra Garapiña',
                'precio' => '30',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Huari',
                'precio' => '28',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Paceña',
                'precio' => '25',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Soda 2Lts',
                'precio' => '20',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Agua 2Lts',
                'precio' => '15',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Soda 1/2 Lt',
                'precio' => '10',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Agua 1/2 Lt',
                'precio' => '10',
                'categoria_id' => '2'
            ],
            [
                'nombre' => 'Vaso Garapiña',
                'precio' => '10',
                'categoria_id' => '2'
            ],
        );

        Producto::insert($data);
    }
}
