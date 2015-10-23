<?php

class PermissionRole extends Eloquent{
	protected $table = "permission_role";
	public $timestamps = false;

	public function roles(){
		return $this->belongsTo("Role","role_id");
	}

	public function permissions(){
		return $this->belongsTo("Permission","permission_id");
	}
}