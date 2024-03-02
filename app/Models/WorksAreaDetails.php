<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorksAreaDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_description',
        'btn_title',
        'btn_link',
        'type',
        'serial', 
        'icon',
        'status',
    ];
}