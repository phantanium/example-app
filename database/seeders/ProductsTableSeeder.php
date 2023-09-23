<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Pewangi Ruangan',
            'detail' => 'Pewangi Ruangan - Glade Air Freshener 225 ML',
        ]);
        Product::create([
            'name' => 'Aqua',
            'detail' => 'Air mineral - Aqua 330 ML',
        ]);
    }
}
