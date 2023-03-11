<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class HrCoordinatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password='12345678';
        DB::table('users')->insert([
        'name'=>'Aymen',
        'email'=>'Aymen@Xcompany.com',
        'password'=>Hash::make($password),
        'phone'=>'0530521637',
        'address'=>'Khobar',
        'role'=>'0',
       ]);     

    }
}
