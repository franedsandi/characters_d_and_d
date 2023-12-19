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
}
