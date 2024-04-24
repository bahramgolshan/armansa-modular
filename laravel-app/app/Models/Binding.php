<?php

namespace App\Models;

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

  public static $bindingDirection = ['fa_v', 'fa_h', 'en_v', 'en_h'];

  public function serviceDetails()
  {
    return $this->hasMany(ServiceDetail::class);
  }
}
