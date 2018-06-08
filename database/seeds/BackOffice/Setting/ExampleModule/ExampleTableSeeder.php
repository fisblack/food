<?php

namespace App\Seeder\BackOffice\Example;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExampleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 10)->create();
    }
}
