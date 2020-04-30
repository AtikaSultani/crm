<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class specific_category extends Model
{
    //

    public function complaints()
    {
      return $this->hasMany(Complaints::$this);
    }

}
