<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fan extends Base
{
    // 粉丝用户
    public function fuser()
    {
        return $this->hasOne(\App\User::class, 'id', 'fan_id');
    }
    
    // 被关注用户
    public function suser()
    {
        return $this->hasOne(\App\User::class,'id','star_id');
    }
}
