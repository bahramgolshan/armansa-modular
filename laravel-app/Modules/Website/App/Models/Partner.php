<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
  protected $table = 'partners';
  public $timestamps = false;

  use SoftDeletes;

  public function media()
  {
    return $this->belongsTo('Media', 'media_id');
  }
}
