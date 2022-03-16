<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                "name"=>"philippe",
                
                "email"=>"philippe@hotmail.com",

                "role_id"=>1,

                "password"=>Hash::make("philippo"),

                "created_at"=>now()
            ]


        ]);
    }
}
