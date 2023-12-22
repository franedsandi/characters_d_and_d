<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Skill;
use Faker\Generator as Faker;


class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $data = ['Acrobatics', 'Animal Handling', 'Arcana', 'Athletics', 'Deception', 'History', 'Insight', 'Intimidation', 'Investigation', 'Medicine', 'Nature', 'Perception', 'Performance', 'Persuasion', 'Religion', 'Sleight of Hand', 'Stealth', 'Survival'];
        foreach ($data as $skill){
            $new_skill= new Skill();
            $new_skill->name= $skill;
            $new_skill->slug = Skill::generateSlug($new_skill->name);
            $new_skill->description = $faker->text(255);
            $new_skill->particular_buff= $faker->sentence(1);
            $new_skill->save();
        }
    }
}
