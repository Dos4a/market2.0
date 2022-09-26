<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::firstOrCreate([
            'url' => 'https://i.ebayimg.com/images/g/BwgAAOSwMxpjGWFz/s-l1600.jpg',
            'product_id' => '1'
        ]);

        Image::firstOrCreate([
            'url' => 'https://i.ebayimg.com/images/g/qEcAAOSwLP5jKehE/s-l1600.jpg',
            'product_id' => '2'
        ]);

        Image::firstOrCreate([
            'url' => 'https://i.ebayimg.com/images/g/HJ4AAOSwxzVhQL8T/s-l640.jpg',
            'product_id' => '3'
        ]);

        Image::firstOrCreate([
            'url' => 'https://i.ebayimg.com/images/g/YysAAOSw-IdiaD3C/s-l1600.jpg',
            'product_id' => '4'
        ]);

        Image::firstOrCreate([
            'url' => 'https://i.ebayimg.com/images/g/BuEAAOSwqR1jKIeP/s-l1600.jpg',
            'product_id' => '5'
        ]);

        Image::firstOrCreate([
            'url' => 'https://i.ebayimg.com/images/g/SrUAAOSw1EtiGpsd/s-l1600.jpg',
            'product_id' => '6'
        ]);

        Image::firstOrCreate([
            'url' => 'https://i.ebayimg.com/images/g/ccgAAOSwgNZjL0xW/s-l1600.jpg',
            'product_id' => '7'
        ]);

        Image::firstOrCreate([
            'url' => 'https://i.ebayimg.com/images/g/18kAAOSwv~Fe-qVO/s-l1600.jpg',
            'product_id' => '8'
        ]);

    }
}
