<?php

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission{

	public function permissionRole(){
    	return $this->hasMany("PermissionRole","id");
    }
}
