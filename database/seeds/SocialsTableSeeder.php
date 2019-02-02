<?php

use Illuminate\Database\Seeder;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            'is_active' => true,
            'iclass' => 'fab fa-twitter-square', 
            'title' => 'Twitter', 
            'link_url' => 'https://twitter.com',
            'sort' => 1,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('socials')->insert([
            'is_active' => true,
            'iclass' => 'fab fa-facebook-square', 
            'title' => 'Facebook', 
            'link_url' => 'https://www.facebook.com/',
            'sort' => 2,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('socials')->insert([
            'is_active' => true,
            'iclass' => 'fab fa-instagram', 
            'title' => 'Instagram', 
            'link_url' => 'https://www.instagram.com',
            'sort' => 3,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('socials')->insert([
            'is_active' => true,
            'iclass' => 'fas fa-envelope-square', 
            'title' => 'Email', 
            'link_url' => 'https://mail.google.com',
            'sort' => 4,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
