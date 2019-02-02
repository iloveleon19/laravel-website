<?php

use Illuminate\Database\Seeder;

class CarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            'is_active' => true,
            'title' => 'Hielo', 
            'text' => 'A free responsive web site template by <a href="https://templated.co">TEMPLATED</a>', 
            'img_id' => 1,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('carousels')->insert([
            'is_active' => true,
            'title' => 'Magna etiam', 
            'text' => 'Lorem ipsum dolor sit amet nullam feugiat', 
            'img_id' => 2,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('carousels')->insert([
            'is_active' => true,
            'title' => 'Tempus dolor', 
            'text' => 'Sed cursus aliuam veroeros lorem ipsum nullam', 
            'img_id' => 3,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('carousels')->insert([
            'is_active' => true,
            'title' => 'Etiam feugiat', 
            'text' => 'Adipiscing lorem ipsum feugiat sed phasellus consequat', 
            'img_id' => 4,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('carousels')->insert([
            'is_active' => true,
            'title' => 'Lorem adipiscing', 
            'text' => 'Ipsum dolor sed magna veroeros lorem ipsum', 
            'img_id' => 5,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
