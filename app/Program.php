<?php

namespace App;
use App\Models\Complaint;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{


  protected $fillable = ['program_name','start_date','end_date'];

  public function complaint()
  {
    return $this->hasMany(Complaint::$this);
  }
}
