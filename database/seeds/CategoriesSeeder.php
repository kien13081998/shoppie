<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
        ['id' => 1, 'name' => "KiD", 'status' =>"0"],
        ['id' => 2, 'name' => "MEN", 'status' =>"0"],
        ['id' => 3, 'name' => "WOMEN", 'status' =>"0"],
        ['id' => 4, 'name' => "SHOES", 'status' =>"0"],
        ['id' => 5, 'name' => "TROUSERS", 'status' =>"0"],
      ]);
    }
}
