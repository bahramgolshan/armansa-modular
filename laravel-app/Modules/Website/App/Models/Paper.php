<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paper extends Model
{

  protected $table = 'papers';
  public $timestamps = true;

  use SoftDeletes;

  public static $codes = [
    'tahrir-70',
    'tahrir-80',
    'gelase-135',
  ];

  public function serviceDetails()
  {
    return $this->hasMany(ServiceDetail::class);
  }
}
