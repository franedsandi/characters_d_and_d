<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Race;
use Faker\Generator as Faker;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $data = ['Druid','Elf','Human','Gnome','Dwarf','Orc','Drow'];
        foreach($data as $race){
            $new_race=new Race();
            $new_race->name = $race;
            $new_race->description = $faker->text();
            $new_race->mod_for= $faker->numberBetween(-3, 3);
            $new_race->mod_des= $faker->numberBetween(-3, 3);
            $new_race->mod_cos= $faker->numberBetween(-3, 3);
            $new_race->mod_int= $faker->numberBetween(-3, 3);
            $new_race->mod_sag= $faker->numberBetween(-3, 3);
            $new_race->mod_car= $faker->numberBetween(-3, 3);
            $new_race->save();
        }
    }
}
