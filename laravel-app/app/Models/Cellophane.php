<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cellophane extends Model
{

  protected $table = 'cellophanes';
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
