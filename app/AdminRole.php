<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminRole extends Base
{
    protected $table = 'admin_roles';
    
    // 当前用户的所有权限
    public function permissions()
    {
        return $this->belongsToMany(\App\AdminPermission::class, 'admin_permission_role',
            'role_id', 'permission_id')->withPivot(['role_id','permission_id']);
    }
    
    // 给角色赋予权限
    public function grantPermission($permission)
    {
        return $this->permissions()->save($permission);
    }
    
    // 取消角色权限
    public function deletePermission($permission)
    {
        return $this->permissions()->detach($permission);
    }
    
    // 判断角色是否有权限
    public function hasPermission($permission)
    {
        return $this->permissions->contains($permission);
    }
    
}
