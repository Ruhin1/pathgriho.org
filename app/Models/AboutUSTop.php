<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUSTop extends Model
{
    protected $fillable = [
        'title',
        'description', 
        'serial',
        'status',
    ]; 
    use HasFactory;
}
