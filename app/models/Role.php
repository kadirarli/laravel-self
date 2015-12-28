<?php

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole{

	public function assignedRole(){
    	return $this->hasMany("AssignedRole","id");
    }

    public function permission(){
    	return $this->belongsToMany('Permission');
    }
}