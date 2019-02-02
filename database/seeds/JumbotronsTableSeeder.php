<?php

use Illuminate\Database\Seeder;

class JumbotronsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jumbotrons')->insert([
            'is_active' => true,
            'title' => 'Untitled. All rights reserved.', 
            'text' => 'Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
