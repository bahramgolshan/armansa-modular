<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceCategory extends Model
{

  protected $table = 'service_categories';
  public $timestamps = true;

  use SoftDeletes;



  public function services()
  {
    return $this->hasMany(Service::class);
  }
}
