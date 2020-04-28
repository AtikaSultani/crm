<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = ['project_name','NGO_name','program_id','start_date','end_date','donors',
     'activities','direct_beneficiaries','indirect_beneficiaries','on_budject_project','off_budject_project','budjet',
     'province_id','district_id'];
}
