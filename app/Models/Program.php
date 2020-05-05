<?php

namespace App\Models;

use App\complaints;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{

    protected $guarded = [];

    /**
     * Get the complain of program
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function complaints()
    {
        return $this->hasMany(Complaints::$this);
    }
}
