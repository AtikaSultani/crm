<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the board category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function boardCategory()
    {
        return $this->belongsTo(BroadCategory::class);
    }

    /**
     * Get the specific category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function specificCategory()
    {
        return $this->belongsTo(SpecificCategory::class);
    }

    /**
     * Get province of the complaint
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * Get district of the complaint
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    /**
     * Get the program of complaint
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    /**
     * Get project of complaint
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
