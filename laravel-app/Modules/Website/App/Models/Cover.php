<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cover extends Model
{

  protected $table = 'covers';
  public $timestamps = true;

  use SoftDeletes;

  public static $codes = [
    'gelase-250',
  ];

  public function serviceDetails()
  {
    return $this->hasMany(ServiceDetail::class);
  }
}
