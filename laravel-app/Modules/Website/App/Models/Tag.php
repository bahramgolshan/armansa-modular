<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

  protected $table = 'tags';
  public $timestamps = false;

  public function blogPostTags()
  {
    return $this->hasMany(BlogPostTag::class);
  }

  public function printSampleTags()
  {
    return $this->hasMany(ServiceSampleTag::class);
  }
}
