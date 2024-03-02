<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCList extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'position',
        'image',
        'serial',
        'status',
    ];
}
