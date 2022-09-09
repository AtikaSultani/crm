<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{

    use HasFactory;

    protected $guarded = [];

    /**
     * Get the complain of program
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
