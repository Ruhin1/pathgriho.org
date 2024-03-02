<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SBPageXBanner extends Model
{
    use HasFactory;
    protected $fillable = [
    'xbannerimage',
    'serial',
    'status',
    ]; 
}


