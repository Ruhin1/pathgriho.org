<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticSiteItem extends Model
{
    use HasFactory;
    protected $fillable = ['welcome_image', 'title', 'short_description', 'y_separator_image', 'x_separator_image', 'banner_image', 'shop_button_link', 'contact_button_link', 'banner_title', 'testimonial_title', 'testimonial_image', 'details_video_url', 'products_title' ];
}
