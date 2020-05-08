<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecificCategory extends Model
{

    /**
     * Get complaints
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
