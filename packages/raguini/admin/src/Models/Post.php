<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model {
    use SoftDeletes;

    protected $fillable = [ 'author_id', 'title', 'slug', 'excerpt', 'body' ];
    

    public static function findBySlugOrFail($slug) {
        return Post::where('slug', '=', $slug)->firstOrFail();
    }

    public static function findBySlug($slug) {
        return Post::where('slug', '=', $slug)->first();
    }
}
