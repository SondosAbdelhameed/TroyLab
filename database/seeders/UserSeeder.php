<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => "Admin",
          'email' => "sondos.abdelhameed@yahoo.com",
          'password' => \Hash::make('12345678'),
          'user_type_id' => 1,
          ]);
         //User::factory(10)->create();
    }
}
