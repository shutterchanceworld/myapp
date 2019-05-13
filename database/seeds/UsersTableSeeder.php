<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Hiroaki Takeshima',
          'email' => 'htakeshimajp@myapp.com',
          'password' => bcrypt('user'),
      ]);
    }
}
