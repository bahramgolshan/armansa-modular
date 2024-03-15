<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{

  protected $table = 'blog_categories';
  public $timestamps = false;

  public function blogPosts()
  {
    return $this->hasMany(BlogPost::class);
  }
}
