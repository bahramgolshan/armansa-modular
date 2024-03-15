<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cellophane extends Model
{

  protected $table = 'cellophane';
  public $timestamps = true;

  use SoftDeletes;

  public static $codes = [
    'shiny',
    'matt',
  ];

  public function serviceDetails()
  {
    return $this->hasMany(ServiceDetail::class);
  }
}
