<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_heading',
        'first_title',
        'first_btn_title',
        'first_btn_link',
        'primary_btn_title',
        'primary_btn_link',
        'main_heading',
        'secondary_btn_title',
        'secondary_btn_link',
        'first_workout_title',
        'first_workout',
        'second_workout_title',
        'second_workout',
        'third_workout_title',
        'third_workout',
        'article_title',
        'article_heading',
        'bg_image',
        'secondary_bg_image',
    ];
}