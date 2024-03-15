<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceSample extends Model
{

  protected $table = 'service_samples';
  public $timestamps = true;

  public function media()
  {
    return $this->belongsTo(Media::class, 'media_id');
  }
}
