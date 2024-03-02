<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqOne extends Model
{
    use HasFactory;
    protected $fillable = [
        'faqtitle',
        'faqdescription',
        'serial',
        'status'
    ]; 
}
