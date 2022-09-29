<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::firstOrCreate([
            'name' => 'Electronics',
        ]);

        Category::firstOrCreate([
            'name' => 'Fashion',
        ]);

        Category::firstOrCreate([
            'name' => 'Health & Beauty',
        ]);

        Category::firstOrCreate([
            'name' => 'Home & Garden',
        ]);

        Category::firstOrCreate([
            'name' => 'Sports',
        ]);

        Category::firstOrCreate([
            'name' => 'Collectibles & Art',
        ]);

        Category::firstOrCreate([
            'name' => 'Motors',
        ]);

        Category::firstOrCreate([
            'name' => 'Industrial Equipments',
        ]);

    }
}
