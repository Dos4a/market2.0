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
            'preview_image' => 'https://d13o3tuo14g2wf.cloudfront.net/thumbnails%2Flarge%2FAsset+Hierarchy%2FConsumer+Assets%2FAccessories%2FHeadphones%2FEarbuds%2F2022%2FWH-1000XM5%2FProduct+Images%2FSilver%2FeComm%2F1+WH-1000XM5_standard_silver.png.png?Policy=eyJTdGF0ZW1lbnQiOlt7IlJlc291cmNlIjoiaHR0cHM6Ly9kMTNvM3R1bzE0ZzJ3Zi5jbG91ZGZyb250Lm5ldC90aHVtYm5haWxzJTJGbGFyZ2UlMkZBc3NldCtIaWVyYXJjaHklMkZDb25zdW1lcitBc3NldHMlMkZBY2Nlc3NvcmllcyUyRkhlYWRwaG9uZXMlMkZFYXJidWRzJTJGMjAyMiUyRldILTEwMDBYTTUlMkZQcm9kdWN0K0ltYWdlcyUyRlNpbHZlciUyRmVDb21tJTJGMStXSC0xMDAwWE01X3N0YW5kYXJkX3NpbHZlci5wbmcucG5nIiwiQ29uZGl0aW9uIjp7IkRhdGVMZXNzVGhhbiI6eyJBV1M6RXBvY2hUaW1lIjoyMTQ1NzYyMDAwfX19XX0_&Signature=YyKd17BfLHimYGf4FH8EYLY68kVsxAT~Gf4i03TIyLVI0gtjWmwSW97tt8d3v5dvm1q4KI4o71zFR8SXPtCqt6Axso~8wOUtSQihSduWOsU2hYKL0plJSIfVEg27GnsZvECJFXLKoW2vHPto2DCsdnr3r2nDwZ0LSswfzPRpomol5iE1hkU2U4GvdwPL0K0SZHFIfuSLOK7fU-MIVlkYWd0mYCnybd02TgtHafkRrl-DLlB1GwoPk7ATYkR7g7rHO4HeF~VGH-Z~NTJ-zFNP8jQ9nMTCHcKi2fsAlr6PgkKSIzYzLZdpiG3iJRpRZKkufyjRbuODQvAd6~lBSXp1cw__&Key-Pair-Id=K37BLT9C6HMMJ0'
        ]);

        Category::firstOrCreate([
            'name' => 'Fashion',
            'preview_image' => 'https://fashionmagazine.com/wp-content/uploads/2019/03/2019-03-06-1.jpg'
        ]);

        Category::firstOrCreate([
            'name' => 'Health & Beauty',
            'preview_image' => 'https://m.mac-cosmetics.ru/media/export/cms/products/640x600/mac_sku_M2LPM5_640x600_0.jpg'
        ]);

        Category::firstOrCreate([
            'name' => 'Home & Garden',
            'preview_image' => 'https://images.prom.ua/722113604_w640_h640_grabli-dlya-planirovki.jpg'
        ]);

        Category::firstOrCreate([
            'name' => 'Sports',
            'preview_image' => 'https://media.npr.org/assets/img/2020/06/10/gettyimages-200199027-001-b5fb3d8d8469ab744d9e97706fa67bc5c0e4fa40-s1100-c50.jpg'
        ]);

        Category::firstOrCreate([
            'name' => 'Collectibles & Art',
            'preview_image' => 'https://lh6.ggpht.com/HlgucZ0ylJAfZgusynnUwxNIgIp5htNhShF559x3dRXiuy_UdP3UQVLYW6c=s1200'
        ]);

        Category::firstOrCreate([
            'name' => 'Motors',
            'preview_image' => 'https://www.topgear.com/sites/default/files/2022/07/1_1.jpg'
        ]);

        Category::firstOrCreate([
            'name' => 'Industrial Equipments',
            'preview_image' => 'https://www.zeppelin.ru/upload/iblock/855/7c06bd3s3bsstxc7ntmfy08yql6py8f6.jpg'
        ]);

    }
}
