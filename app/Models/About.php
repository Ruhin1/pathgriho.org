<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'title',
        'description',
        'mission_title',
        'mission_description',
        'vision_title',
        'vision_description',
        'about_title',
        'about_description',
        'story_title',
        'story_description',
        'video_title',
        'video_description',
        'video_iframe',
        'btn_title',
        'btn_link',
    ];
}