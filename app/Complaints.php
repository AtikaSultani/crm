<?php

namespace App;

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
          return $this->hasMany(Broad_category::class);
        }
        public function referred_programs()
        {
          return $this->hasMany(Referred_program::class);
        }
        public function specific_categorys()
        {
          return $this->belongsTo(Specific_category::class);
        }
        public function provinces()
        {
          return $this->belongsTo(Provinces::class);
        }
        public function districts()
        {
          return $this->belongsTo(Districts::class);
        }
}
