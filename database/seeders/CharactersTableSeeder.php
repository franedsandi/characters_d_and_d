<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
            $character->height= $faker->$faker->randomFloat(2, 1, 999);
            $character->weight= $faker->$faker->randomFloat(2, 1, 999999);
            $character->background= $faker->text();
            $character->background= $faker->text();

        }

    }
}
