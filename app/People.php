<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['first_name', 'last_name', 'favorite_food'];

    public function visits()
    {
      return $this->hasMany(Visit::class,'person_id');
    }
}
