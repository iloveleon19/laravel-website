<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'is_active' => true,
            'title' => 'Home', 
            'link_url' => '#', 
            'isDropdown' => false,
            'isActive' => true,
            'isDisabled' => false,
            'sort' => 1,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('menus')->insert([
            'is_active' => true,
            'title' => 'Link', 
            'link_url' => '#', 
            'isDropdown' => false,
            'isActive' => false,
            'isDisabled' => false,
            'sort' => 2,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('menus')->insert([
            'is_active' => true,
            'title' => 'Dropdown', 
            'link_url' => '#', 
            'isDropdown' => true,
            'isActive' => false,
            'isDisabled' => false,
            'sort' => 3,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('menus')->insert([
            'is_active' => true,
            'title' => 'Disable', 
            'link_url' => '#', 
            'isDropdown' => false,
            'isActive' => false,
            'isDisabled' => true,
            'sort' => 4,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
