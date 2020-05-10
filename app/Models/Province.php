<?php

namespace App\Models;

use App\complaints;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{

    /**
     * Get the complains
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    /**
     * Get district of province
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
