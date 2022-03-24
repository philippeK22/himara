<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([

            RoleSeeder::class,
            UserSeeder::class,
            CategorieImageSeeder::class,
            ImageSeeder::class,
            CategorieArticleSeeder::class,
            TagSeeder::class,
            ArticleSeeder::class,
            CommentSeeder::class,
            FonctionSeeder::class,
            TeamSeeder::class,
            ServiceSeeder::class,
            CategorieRoomSeeder::class,
            StatutSeeder::class,
            FeatureSeeder::class,
            RoomTagSeeder::class,
            RoomSeeder::class,
            InfoSeeder::class,
            VideoSeeder::class,
            CarouselSeeder::class,
            HimaraPictureSeeder::class,


        ]);
    }
}
