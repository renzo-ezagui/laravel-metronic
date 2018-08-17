<?php

use App\Codes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Codes::class,50)->create();
    }
}
