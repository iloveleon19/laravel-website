<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // slide image
        DB::table('images')->insert([
            'is_active' => true,
            'type' => 1, 
            'img_path' => '/images/slide01.jpg', 
            'alt_text' => '{"alt":"First slide"}', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('images')->insert([
            'is_active' => true,
            'type' => 1, 
            'img_path' => '/images/slide02.jpg', 
            'alt_text' => '{"alt":"Second slide"}', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('images')->insert([
            'is_active' => true,
            'type' => 1, 
            'img_path' => '/images/slide03.jpg', 
            'alt_text' => '{"alt":"Third slide"}', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('images')->insert([
            'is_active' => true,
            'type' => 1, 
            'img_path' => '/images/slide04.jpg', 
            'alt_text' => '{"alt":"Fourth slide"}', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('images')->insert([
            'is_active' => true,
            'type' => 1, 
            'img_path' => '/images/slide05.jpg', 
            'alt_text' => '{"alt":"Fifth slide"}', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        // pic image
        DB::table('images')->insert([
            'is_active' => true,
            'type' => 2, 
            'img_path' => '/images/pic01.jpg', 
            'alt_text' => '{"alt":"card image", "alt_cap":"Card image cap"}', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('images')->insert([
            'is_active' => true,
            'type' => 2, 
            'img_path' => '/images/pic02.jpg', 
            'alt_text' => '{"alt":"card image", "alt_cap":"Card image cap"}', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('images')->insert([
            'is_active' => true,
            'type' => 2, 
            'img_path' => '/images/pic03.jpg', 
            'alt_text' => '{"alt":"card image", "alt_cap":"Card image cap"}', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('images')->insert([
            'is_active' => true,
            'type' => 2, 
            'img_path' => '/images/pic04.jpg', 
            'alt_text' => '{"alt":"card image", "alt_cap":"Card image cap"}', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        // background image
        DB::table('images')->insert([
            'is_active' => true,
            'type' => 3, 
            'img_path' => '/images/bg.jpg', 
            'alt_text' => '{"alt":"Background image"}', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
