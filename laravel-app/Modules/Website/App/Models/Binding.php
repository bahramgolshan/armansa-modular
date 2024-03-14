<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Binding extends Model
{

  protected $table = 'bindings';
  public $timestamps = true;

  use SoftDeletes;

  public static $codes = [
    'hard-galingor',
    'hard-cellophane',
    'maftool-mangane',
    'shomiz-tahchasb',
    'simi-double',
    'simi-single',
  ];

  public function serviceDetails()
  {
    return $this->hasMany('ServiceDetail');
  }
}
