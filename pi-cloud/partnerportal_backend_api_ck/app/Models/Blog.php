<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blogs";

    protected $fillable = [
        'blog_title',
        'blog_slug',
        'blog_author',
        'blog_short_description',
        'blog_description',
        'blog_image_path',
        'is_external_link',
        'blog_link',
        'blog_is_active',
    ];
}
