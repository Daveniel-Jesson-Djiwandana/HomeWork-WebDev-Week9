<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Laptop::create([
            'brand' => 'Asus',
            'model' => 'ROG Zephyrus G14',
            'processor' => 'AMD Ryzen 9 5900HS',
            'ram' => '16GB DDR4',
        ]);
    }
}
