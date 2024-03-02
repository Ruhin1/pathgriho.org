<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamTop extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_title',
        'second_title',
        'third_title',
        'fourth_title',
        'btn_title',
        'btn_link',
        'title',
        'description',
        'image',
        'serial',
        'status'
    ]; 
}