<?php

use Illuminate\Database\Seeder;
use NorthernFoodValley\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          User::create([
              'name' => 'developer',
              'email' => 'info@adiwit.co.th',
              'password' => bcrypt('88888888'),
          ]);
    }
}
