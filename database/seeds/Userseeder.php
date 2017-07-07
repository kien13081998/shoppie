<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
           'email' => 'user@gmail.com',
           'password' => 'e606e38b0d8c19b24cf0ee3808183162ea7cd63ff7912dbb22b5e803286b4446',// user123
           'images' => "/upload/users/ada.jpg",
           'city' => 'da nang',
           'street' =>'quang trung',
           'phone' => '01639898585',
           'last_name' => 'user',
           'first_name' => 'user',
        ],
      ]);
    }
}
