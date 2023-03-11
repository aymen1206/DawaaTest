<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class HrManagerSeeder extends Seeder
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
        'name'=>'Admin',
        'email'=>'Admin@Xcompany.com',
        'password'=>Hash::make($password),
        'phone'=>'0530521637',
        'address'=>'KSA',
        'role'=>'1',
       ]);
    }
}
