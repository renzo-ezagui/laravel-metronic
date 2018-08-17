<?php

use App\Codes;
use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         factory(User::class,100)->create([]);
         factory(Codes::class,100)->create([]);
    }
}
