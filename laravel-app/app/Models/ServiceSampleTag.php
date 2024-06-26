<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceSampleTag extends Model
{

  protected $table = 'service_sample_tags';
  public $timestamps = false;

  public function serviceSample()
  {
    return $this->belongsTo(ServiceSample::class, 'service_sample_id');
  }

  public function tag()
  {
    return $this->belongsTo(Tag::class, 'tag_id');
  }
}
