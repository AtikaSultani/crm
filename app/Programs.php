<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{


  protected $fillable = ['program_name','start_date','end_date'];

  public function complaints()
  {
    return $this->hasMany(Complaints::$this);
  }
}
