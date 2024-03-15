<?php

namespace Modules\Website\App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{

  protected $table = 'blog_posts';
  public $timestamps = true;

  public static $status = ['draft', 'publish'];

  public function blogCategory()
  {
    return $this->belongsTo(BlogCategory::class, 'blog_category_id');
  }

  public function blogComments()
  {
    return $this->hasMany(BlogComment::class);
  }

  public function blogPostTags()
  {
    return $this->hasMany(BlogPostTag::class);
  }

  public function media()
  {
    return $this->belongsTo(Media::class, 'media_id');
  }
}
