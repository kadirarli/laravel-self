<?php

class AssignedRole extends Eloquent{
	protected $table = "assigned_roles";
	public $timestamps = false;

	public function users(){
		return $this->belongsTo("User","user_id");
	}

	public function roles(){
		return $this->belongsTo("Role","role_id");
	}

}