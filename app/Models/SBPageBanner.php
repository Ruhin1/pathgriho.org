<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SBPageBanner extends Model
{
    use HasFactory;
    protected $fillable = [
        'bannertitle',
        'bannerdescription',
        'bannerbuttontext',
        'bannerbuttonurl',
        'bannerimage',
        'serial',
        'status',
    ]; 

  
}