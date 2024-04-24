<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{

  protected $table = 'attributes';
  public $timestamps = true;

  use SoftDeletes;



  public function attributeCategory()
  {
    return $this->belongsTo(AttributeCategory::class, 'attribute_category_id');
  }

  public function serviceAttributes()
  {
    return $this->hasMany(ServiceAttribute::class);
  }
}
