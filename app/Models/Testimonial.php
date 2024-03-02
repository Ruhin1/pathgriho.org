<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'secondary_title',
        'secondary_description',
        'image',
        'photos',
        'bg_image',
        'short_description',
        'banner_title',
        'banner_description',
        'volunteers',
        'volunteer_title',
        'btn_title',
        'btn_link',
        'primary_btn_title',
        'primary_btn_link',
        'secondary_btn_title',
        'secondary_btn_link',
        'description',
        'status',
    ];
}