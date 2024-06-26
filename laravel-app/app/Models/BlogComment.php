<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{

  protected $table = 'blog_comments';
  public $timestamps = true;

  public static $status = ['pending', 'accepted', 'rejected'];

  public function blogPost()
  {
    return $this->belongsTo(BlogPost::class, 'blog_post_id');
  }
}
