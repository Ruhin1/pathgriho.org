<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContacUs extends Model
{
    use HasFactory;
    protected $fillable = ['mtitle','mdes','gmtitle','gmiframe','serial','status'];
    
}
