<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_articles')->insert([

            [
                "nom"=>"Travel",

                "created_at"=>now(),

            ],

            [
                "nom"=>"Room",

                "created_at"=>now(),

            ],

            [
                "nom"=>"Holidays",

                "created_at"=>now(),

            ],
            [
                "nom"=>"Events",

                "created_at"=>now(),

            ],




        ]);
    }
}
