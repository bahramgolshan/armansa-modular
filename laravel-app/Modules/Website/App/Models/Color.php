<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{

  protected $table = 'colors';
  public $timestamps = true;

  use SoftDeletes;

  public static $codes = [
    'one-color',
    'four-colors',
  ];

  public function serviceDetails()
  {
    return $this->hasMany('ServiceDetail');
  }
}
