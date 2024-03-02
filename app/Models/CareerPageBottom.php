<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerPageBottom extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'icon',
        'description',
        'image',
        'imagetext',
        'spicon',
        'sptext',
        'spdes',
        'spbtnurl',
        'serial',
        'status',
    ];
}
