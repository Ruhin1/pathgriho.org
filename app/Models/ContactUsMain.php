<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsMain extends Model
{
    use HasFactory;
    protected $fillable = [
    'title',
    'sdes',
    'address',
    'email',
    'phone',
    'furl',
    'turl',
    'yurl',
    'iurl',
    'serial',
    'status'
    ];
   
}
