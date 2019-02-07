<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);

        $this->call(MenusTableSeeder::class);
        $this->call(ImagesTableSeeder::class);

        $this->call(BrandsTableSeeder::class);
        $this->call(SubMenusTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->call(CarouselsTableSeeder::class);
        $this->call(FootersTableSeeder::class);
        $this->call(JumbotronsTableSeeder::class);
        $this->call(SearchsTableSeeder::class);
        $this->call(SocialsTableSeeder::class);
    }
}
