<?php


use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PopulateComicsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10 ; $i++) {

        $ComicData = [

          'title' => $faker ->word,
          'author' => $faker ->name,
          'year' => $faker ->year,
          'review' => $faker ->text,
          'vote' => $faker ->randomDigit

        ];

        $comic = new Comic;
        $comic-> fill($ComicData);
        $comic-> save();

      }
    }
}
