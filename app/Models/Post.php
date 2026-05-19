<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'featured_image', 'publish_date'];

    protected $casts = [
        'publish_date' => 'datetime',
    ];
}
