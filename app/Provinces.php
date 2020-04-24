<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provinces extends Model
{
    //

public function complaints()
{
  return $this->belongsTo(Complaints::$this);
}
}
