<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Race extends Model
{
    use HasFactory;
    public function characters(){
        return $this->hasMany(Character::class);
    }

    protected $fillable = [
        'name',
        'description',
        'mod_for',
        'mod_des',
        'mod_cos',
        'mod_int',
        'mod_sag',
        'mod_car'
    ];

    public static function generateSlug($name){
        $slug = Str::slug($name, "-");
        $original_slug = $slug;
        $exists = Race::where("slug", $slug)->first();
        $c = 1;
        while($exists){
            $slug = $original_slug . "-" . $c;
            $exists = Race::where("slug", $slug)->first();

            $c++;
        }
        return $slug;
    }
}
