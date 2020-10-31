<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPermission extends Base
{
    protected $table = 'admin_permissions';
    
    // 权限属于哪个角色
    public function roles()
    {
        return $this->belongsToMany(\App\AdminRole::class, 'admin_permission_role',
            'permission_id', 'role_id')->withPivot(['role_id', 'permission_id']);
    }
    
}
