<?php

use Faker\Generator as Faker;
use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $newComic = new Comic();
            $newComic->title = $faker->words(2, true);
            $newComic->description = $faker->paragraph(3, true);
            $newComic->thumb = $faker->imageUrl(640, 480, 'comics', true);
            $newComic->price = $faker->randomFloat(2, 15, 25);
            $newComic->series = $faker->words(3, true);
            $newComic->type = $faker->words(1, true);
            $newComic->sale_date = $faker->date();
        }
    }
}
