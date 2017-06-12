<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('admins')->insert([
          ['id' => 1,
           'name' => 'admin',
          'email' => 'kien13081998@gmail.com',
          'password' => bcrypt('admin'),
          'level' => 1,
        ],
      ]);
    }
}
