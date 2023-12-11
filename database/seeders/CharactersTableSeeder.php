<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Race;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10;$i++){
            $character = new Character();
            $character->name = $faker->name;
            $character->race_id = Race::inRandomOrder()->first()->id;
            $character->height= $faker->randomFloat(2, 1, 999);
            $character->weight= $faker->randomFloat(2, 1, 999999);
            $character->background= $faker->text();
            $character->picture= $faker->imageUrl();
            $character->armor_class= $faker->numberBetween(10, 20);
            $character->for= $faker->numberBetween(3, 18);
            $character->des= $faker->numberBetween(3, 18);
            $character->cos= $faker->numberBetween(3, 18);
            $character->int= $faker->numberBetween(3, 18);
            $character->sag= $faker->numberBetween(3, 18);
            $character->car= $faker->numberBetween(3, 18);
            $character->save();
        }

    }
}
