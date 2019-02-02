<?php

use Illuminate\Database\Seeder;

class SearchsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('searches')->insert([
            'title' => 'search', 
            'placeholder' => 'search', 
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
