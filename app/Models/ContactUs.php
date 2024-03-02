<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'title',
        'description',
        'form_heading',
        'form_title',
        'form_description',
        'map_title',
    ];
}