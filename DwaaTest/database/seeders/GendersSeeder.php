<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('gender')->insert([
        'gender'=>'male',
       ]);
       DB::table('gender')->insert([
        'gender'=>'female',
       ]);
    }
}
