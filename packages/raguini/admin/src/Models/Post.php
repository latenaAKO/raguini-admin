<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    protected $fillable = [ 'author_id', 'title', 'slug', 'excerpt', 'body' ];
}
