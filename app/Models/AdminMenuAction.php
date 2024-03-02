<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class AdminMenuAction extends Model
{
    use HasFactory;

    protected $fillable = ['name','admin_menu_id','route','status','permission_id'];

    public function parent()
    {
        return $this->belongsTo(AdminMenu::class, 'admin_menu_id');
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'permission_id');
    }
}
