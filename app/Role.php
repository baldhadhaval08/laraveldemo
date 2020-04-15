<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name'];

    const ADMIN_ROLE = 1;
    const USER_ROLE = 2;
    

    public $rules = [
        'name' => 'required',
    ];

    /**
     * Check permission
     * @param $route - Route name
     *
     * @return bool
     */
    public static function checkPermission($route){
        $roleId = Auth::user()->role_id;
        $permissionArr = config("constants.permission");
        if($roleId == self::ADMIN_ROLE){
            return true;
        }
        
        $isApproved = Auth::user()->is_approved;
        
        $allowedFlag = false;

        if($isApproved == 0 && in_array($route, $permissionArr['unapproved'])){
            $allowedFlag = true;
        }else if($isApproved == 1 && in_array($route, $permissionArr['approved'])){
            $allowedFlag = true;
        }

        return $allowedFlag;
    }
}
