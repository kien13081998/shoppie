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
      DB::table('users')->insert([
          ['id' => 1,
           'email' => 'kien13081998@gmail.com',
           'password' => bcrypt('admin'),
           'city' => 'da nang',
           'street' =>'quang trung',
           'phone' => '01639898585',
           'last_name' => 'admin',
           'first_name' => 'asmin',
        ],
      ]);
    }
}
