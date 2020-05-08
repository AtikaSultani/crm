<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BroadCategory extends Model
{

    protected $guarded = [];

    /**
     * Get the complaints
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
