<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSettings extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'home_title',
        'faq_title',
        'services_title',
        'about_title',
        'search_title',
        'services_title_one',
        'services_title_two',
        'basic_title_one',
        'basic_title_two',
        'basic_title_three',
        'basic_title_four',
        'basic_title_five',
        'logo',
        'secondary_logo',
        'favicon',
        'banner_image',
        'banner_animation_image',
        'map_image',
        'footer_image',
        'footer_animation_image',
        'facebook',
        'youtube',
        'whatsapp',
        'twitter',
        'linkedin',
        'pinterest',
        'threads',
        'map_url',
        'phone_one',
        'phone_two',
        'email',
        'instagram',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];
}