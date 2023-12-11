<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    public function race(){
        return $this->belongsTo(Race::class);
    }

    protected $fillable = [
        'name',
        'race_id',
        'height',
        'weight',
        'background',
        'picture',
        'armor_class',
        'for',
        'des',
        'cos',
        'int',
        'sag',
        'car',
        
    ];
}
