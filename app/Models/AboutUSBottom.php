<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUSBottom extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'des',
        'btntext',
        'btnurl',
        'iframe',
        'bticon',
        'bttext',
        'btdes',
        'btbtntxt',
        'btbtnurl',
        'serial',
        'status',
    ]; 
}


            