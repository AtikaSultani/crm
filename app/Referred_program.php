<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Referred_program extends Model
{
    //


public function complaints()
{
  return $this->hasMany(Complaints::class);
}
}
