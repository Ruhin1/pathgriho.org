<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class AdminMenu extends Model
{
    use HasFactory;

    protected $fillable = ['permission_id','parent_id','name','route','icon','order','status','delete'];

    public function scopeRoot($query)
    {
        $query->whereNull('parent_id')->with('actions');
    }

    public function children()
    {
        return $this->hasMany(AdminMenu::class, 'parent_id')->orderBy('order', 'asc')->where('status', 1)->with(['actions']);
    }

    public function parent()
    {
        return $this->belongsTo(AdminMenu::class, 'parent_id');
    }

    public function actions()
    {
        return $this->hasMany(AdminMenuAction::class, 'admin_menu_id')->where('status', 1);
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'permission_id');
    }
}
