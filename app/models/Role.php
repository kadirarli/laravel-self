<?php

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole{

	public function assignedRole(){
    	return $this->hasMany("AssignedRole","id");
    }

    public function permissionRole(){
    	return $this->hasMany("PermissionRole","id");
    }
}