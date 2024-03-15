<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{

  protected $table = 'sizes';
  public $timestamps = true;

  use SoftDeletes;

  public static $codes = [
    'rahli',
    'rahlibayazi',
    'vaziri',
    'nimevaziri',
    'roghei', 'paltoei', 'kheshti',
  ];

  public function serviceDetails()
  {
    return $this->hasMany(ServiceDetail::class);
  }
}
