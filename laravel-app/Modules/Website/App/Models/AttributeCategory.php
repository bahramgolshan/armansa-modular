<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeCategory extends Model
{

  protected $table = 'attribute_categories';
  public $timestamps = true;

  use SoftDeletes;



  public function attributes()
  {
    return $this->hasMany(Attribute::class);
  }
}
