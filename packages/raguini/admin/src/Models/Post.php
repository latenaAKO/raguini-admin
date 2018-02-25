<?php

namespace Admin\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $fillable = [ 'title', 'slug', 'excerpt', 'body' ];
}
