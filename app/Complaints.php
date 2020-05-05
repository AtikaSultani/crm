<?php

namespace App;

use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Eloquent\Model;
class complaints extends Model
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

        public function broad_categorys()
        {
          return $this->belongsTo(Broad_category::class);
        }
        public function referred_programs()
        {
          return $this->belongsTo(Referred::class);
        }
        public function specific_categorys()
        {
          return $this->belongsTo(Specific_category::class);
        }
        public function provinces()
        {
          return $this->belongsTo(Province::class);
        }
        public function districts()
        {
          return $this->belongsTo(District::class);
        }
}
