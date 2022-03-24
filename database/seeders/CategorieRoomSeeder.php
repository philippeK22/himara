<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_rooms')->insert([
            [
                "nom"=>"Single Room",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Double Room",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Family Room",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Deluxe Room",
                "created_at"=>now(),
            ],
        ]);
    }
}
