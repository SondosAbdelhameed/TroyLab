<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
          UserTypeSeeder::class,
          UserSeeder::class
        ]);
        School::factory(10)->create();
        for ($i = 0; $i<10000 ; $i++) {
          Student::factory(1)->create();
        }
        //Student::factory(100)->create();
    }
}
