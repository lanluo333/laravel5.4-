<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// 表 => Posts
class Base extends Model
{
    // 可以注入数据字段
    protected $guarded = [];
}
