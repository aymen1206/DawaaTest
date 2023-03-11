<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NationalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->insert([
        'country'=>'Saudi Arabia',
       ]);
       DB::table('nationalities')->insert([
        'country'=>'Sudan',
       ]);
       DB::table('nationalities')->insert([
        'country'=>'Jordan',
       ]);
       DB::table('nationalities')->insert([
        'country'=>'Egypt',
       ]);
       DB::table('nationalities')->insert([
        'country'=>'Palestine',
       ]);
       DB::table('nationalities')->insert([
        'country'=>'Moroco',
       ]);

    }
}
