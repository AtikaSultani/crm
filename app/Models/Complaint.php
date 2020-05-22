<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Complaint extends Model
{
    use LogsActivity;

    // Activity log properties
    protected static $logAttributes = ['*'];
    protected static $logAttributesToIgnore = ['updated_at'];
    protected static $logName = 'Complaint';
    protected static $logOnlyDirty = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the user of complaint
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the board category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function broadCategory()
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
