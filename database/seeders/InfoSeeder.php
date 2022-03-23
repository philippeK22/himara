<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                "adresse"=>" Place de la Minoterie 10",
                "mail"=>"molengeek@gmail.com",
                "telephone"=>"048642991",
                "fax"=>"0238384784",
                "site"=>"MOLENGEEK.com",
            ],
        ]);
    }
}
