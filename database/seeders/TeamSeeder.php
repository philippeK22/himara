<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                "fonction_id"=>1,

                "img"=>"luff.jpg",

                "fullname"=>"Jeanette Owens",

                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>2,

                "img"=>"zoro.jpg",

                "fullname"=>"Henry Garret",

                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>3,

                "img"=>"sanji.jpg",

                "fullname"=>"Tommy Alexander",

                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>4,

                "img"=>"shanks.png",

                "fullname"=>"Penny Soto",

                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>5,

                "img"=>"mihawk.jpg",

                "fullname"=>"Alex Cox",

                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>4,

                "img"=>"barbeBlanche.png",

                "fullname"=>"Alfredo Romero",

                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>6,

                "img"=>"roger.jpg",

                "fullname"=>"Glenda Gilbert",

                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>7,

                "img"=>"rayli.jpg",

                "fullname"=>"Sheila Carter",

                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
        ]);
    }
}
