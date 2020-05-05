<?php

namespace App;

use App\Models\District;
use App\Models\Province;
use App\Models\Broad_category;
use App\Models\Specific_category;
use App\Models\Program;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
class complaint extends Model
{
  protected $primaryKey = 'complaints_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'caller_name', 'tel_no_received', 'gender','received_date','status','quarter','referred_to','beneficiary_file','broad_category_id'
        ,'specific_category_id','received_by','person_who_shared_action','close_date','project_id','program_id','description'
        ,'province_id','district_id','village','user_id'];

        public function broad_category()
        {
          return $this->belongsTo(Broad_category::class);
        }

        public function specific_category()
        {
          return $this->belongsTo(Specific_category::class);
        }

        public function province()
        {
          return $this->belongsTo(Province::class);
        }

        public function district()
        {
          return $this->belongsTo(District::class);
        }

        public function program()
        {
          return $this->belongsTo(Program::class);
        }
        public function project()
        {
          return $this->belongsTo(Project::class);
        }
}
