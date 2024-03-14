<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceAttribute extends Model
{

  protected $table = 'service_attributes';
  public $timestamps = false;

  public function service()
  {
    return $this->belongsTo('Service');
  }

  public function attribute()
  {
    return $this->hasOne('Attribute');
  }
}
