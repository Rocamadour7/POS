<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(array(
            'name' => 'Carne de Res',
            'description' => 'Descripción para Carne de Res',
            'quantity' => 10,
            'price' => 80.00 
        ));

        Product::create(array(
            'name' => 'Filete de Pescado',
            'description' => 'Descripción para Filete de Pescado',
            'quantity' => 15,
            'price' => 70.00 
        ));

        Product::create(array(
            'name' => 'Pechuga de Pollo',
            'description' => 'Descripción para Pechuga de Pollo',
            'quantity' => 30,
            'price' => 60.00 
        ));

        Product::create(array(
            'name' => 'Cueritos',
            'description' => 'Descripción para Cueritos',
            'quantity' => 20,
            'price' => 20.00 
        ));

        Product::create(array(
            'name' => 'Chuleta de Puerco',
            'description' => 'Descripción para Chuleta de Puerco',
            'quantity' => 30,
            'price' => 65.00 
        ));
    }
}
