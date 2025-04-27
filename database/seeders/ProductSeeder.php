<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $leafy = Category::where('name', 'Leafy Greens')->first();
        Product::create([
            'name' => 'Spinach',
            'description' => 'Fresh organic spinach.',
            'price' => 2.50,
            'category_id' => $leafy->id,
        ]);
    }
}
