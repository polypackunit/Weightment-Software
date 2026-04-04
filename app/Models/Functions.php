<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Functions extends Model
{
    use HasFactory, HasRoles;

    public static function getPermissionsByGroupName($group_name){

        $permissions = DB::table('permissions')->select('id', 'name')->where('group_name', $group_name)->get(); 

        return $permissions;
    }

    public static function rolesHasPermissions($role, $permissions){

        $hasPermission = true;
        foreach($permissions as $permission){
            if(!$role->hasPermissionTo($permission->name)){
                $hasPermission = false;
                return $hasPermission;
            }
        }
        return $hasPermission;
    }

    
}
