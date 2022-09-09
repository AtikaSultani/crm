<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasFactory;

    protected $guarded = ['provinces'];

    /**
     * Get the complains of project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }


    /**
     * Get the province of project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function provinces()
    {
        return $this->belongsToMany(Province::class);
    }

    /**
     * Get the province of project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
