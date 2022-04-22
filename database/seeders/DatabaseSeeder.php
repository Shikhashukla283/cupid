<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Element;
use Illuminate\Database\Seeders\faker;;
use Illuminate\Support\Carbon;
// use Illuminate\Support\Carbon::random;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'dob' => '2000-02-01',
            'gender' => '1',
            'annual_income' =>'6789' ,
            'occupation' =>'2',
            'family_type' =>'2',
            'manglik' =>'1',
            'expected_income' =>'$7890-$78999',
            'partner_occupation' =>'2',
            'partner_family_type' =>'2',
            'partner_manglik'=>'1',



        
        
        ]);

    }
}
