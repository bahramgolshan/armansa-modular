<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPostTag extends Model
{

  protected $table = 'blog_post_tags';
  public $timestamps = false;

  public function blogPost()
  {
    return $this->belongsTo(BlogPost::class, 'blog_post_id');
  }

  public function blogTag()
  {
    return $this->belongsTo(Tag::class, 'tag_id');
  }
}
