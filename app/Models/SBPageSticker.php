<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SBPageSticker extends Model
{
    use HasFactory;
    protected $fillable = [
        'stickerimage',
        'serial',
        'status',
    ]; 
}
