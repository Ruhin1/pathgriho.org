<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_description',
        'description',
        'image',
        'images',
        'video_iframe',
        'slug',
        'author',
        'type',
        'tags',
        'serial',
        'status'
    ];
}