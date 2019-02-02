<?php

use Illuminate\Database\Seeder;

class SubMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_menus')->insert([
            'is_active' => true,
            'menu_id' => 3,
            'title' => 'Action',
            'divider' => 1,
            'sort' => 1,
            'link_url' => '#',
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('sub_menus')->insert([
            'is_active' => true,
            'menu_id' => 3,
            'title' => 'Another action',
            'divider' => 1,
            'sort' => 2,
            'link_url' => '#',
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('sub_menus')->insert([
            'is_active' => true,
            'menu_id' => 3,
            'title' => 'Something else here',
            'divider' => 2,
            'sort' => 1,
            'link_url' => '#',
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
