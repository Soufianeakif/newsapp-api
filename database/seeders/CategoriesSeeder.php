<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Politics', 'icon' => 'https://cdn3d.iconscout.com/3d/premium/thumb/government-building-7042611-5727633.png'],
            ['name' => 'Technology', 'icon' => 'https://cdn3d.iconscout.com/3d/premium/thumb/technology-9687846-7845369.png?f=webp'],
            ['name' => 'Sports', 'icon' => 'https://cdn3d.iconscout.com/3d/premium/thumb/sports-activity-7162545-5818789.png?f=webp'],
            ['name' => 'Entertainment', 'icon' => 'https://static.vecteezy.com/system/resources/previews/021/507/322/original/media-and-entertainment-3d-icon-png.png'],
        ];

        foreach ($categories as $category) {
            DB::table('category')->insert($category);
        }

        //php artisan db:seed --class=CategorySeeder

    }
}
