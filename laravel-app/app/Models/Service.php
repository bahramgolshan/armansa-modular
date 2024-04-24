<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{

  protected $table = 'services';
  public $timestamps = true;

  use SoftDeletes;



  public function serviceCategory()
  {
    return $this->belongsTo(ServiceCategory::class, 'service_category_id');
  }

  public function serviceAttributes()
  {
    return $this->hasMany(ServiceAttribute::class);
  }

  public function serviceDetails()
  {
    return $this->hasMany(ServiceDetail::class);
  }
}
