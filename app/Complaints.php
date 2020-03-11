<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complaints extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'caller_name', 'tel_no_received', 'gender','received_date','status','quarter','referred_to','broad_category_id'
        ,'specific_category_id','received_by','person_who_shared_action','close_date','description','beneficiary_file','province_id','district_id'
        ,'village','user_id'];
}
