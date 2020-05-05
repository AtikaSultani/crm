<?php

namespace App\Models;

use App\complaints;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{

    /**
     * Get the complains
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function complaints()
    {
        return $this->hasMany(Complaints::$this);
    }
}
