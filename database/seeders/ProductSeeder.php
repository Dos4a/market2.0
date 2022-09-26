<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::firstOrCreate([
            'category_id' => '1',
            'name' => 'iPhone 14',
            'description' => 'New Apple iPhone 14 Pro Max 6.7"120Hz Real Dual Sim Apple A16 48MP',
            'price' => '1997.97',
        ]);

        Product::firstOrCreate([
            'category_id' => '2',
            'name' => 'Vans Old School',
            'description' => 'Vans Old School Walt Disney World 50th Anniversary Park Map VNOA3WKTGYW',
            'price' => '150.00',
        ]);

        Product::firstOrCreate([
            'category_id' => '3',
            'name' => 'Melatonin',
            'description' => 'NOW Foods Melatonin 3mg - 60 Vegetaricsche Kapseln',
            'price' => '16.49',
        ]);

        Product::firstOrCreate([
            'category_id' => '4',
            'name' => 'Ceiling Fan',
            'description' => 'Energy Saving Ceiling Fan LED Light with Remote Control DC Fan Bayu 122cm',
            'price' => '329.00',
        ]);

        Product::firstOrCreate([
            'category_id' => '5',
            'name' => 'Snowboard',
            'description' => 'Ride Buckwild Snowboard 159 cm',
            'price' => '125.00',
        ]);

        Product::firstOrCreate([
            'category_id' => '6',
            'name' => 'Elon Mask NFT',
            'description' => 'ELON MASK - Digital NFT Art - Thermal Portrait by Gonzalo Facio Mint #1/5',
            'price' => '2500.00',
        ]);

        Product::firstOrCreate([
            'category_id' => '7',
            'name' => 'Door Hanle',
            'description' => 'For 2011-2020 Jeep Grand Cherokee Red Carbon Inner Door Handle Trim Cover Strips',
            'price' => '157.77',
        ]);

        Product::firstOrCreate([
            'category_id' => '8',
            'name' => 'Drill Twist',
            'description' => 'Twist Drill blacksmiths 12-35mm 1/2 Reduced Shank HSS Drill Bit For Steel Metal',
            'price' => '6.59',
        ]);

    }
}
