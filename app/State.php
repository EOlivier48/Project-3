<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['state_name', 'state_abbreviation'];

    public function visits()
    {
      return $this->hasMany(Visit::class);
    }
}
