<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Productos;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Productos::create([
                'nombre' => $faker->sentence(),
                'precio' => $faker->randomFloat(2, 0, 100),
                'descripcion' => $faker->text()
            ]);
        }
    }
}
