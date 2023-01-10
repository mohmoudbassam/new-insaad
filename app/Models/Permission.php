<?php

namespace App\Models;

use \Spatie\Permission\Models\Permission as PermissionModel;

class Permission extends PermissionModel
{
    protected $fillable = ['name', 'guard_name', 'group'];

}
