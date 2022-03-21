<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            ['type' => "Admin"],
            ['type' => "School Manager"],
            ['type' => "Student"]
          ]);
    }
}
