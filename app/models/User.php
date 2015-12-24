<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements ConfideUserInterface
{
    use ConfideUser, HasRole;

    public function assignedRole(){
    	return $this->hasMany("AssignedRole");
    }

    static public function adminCard($user_id){
        return DB::select("
        	SELECT 
			    u.name, u.surname, u.created_at, r.name as role, u.profile_photo
			FROM
			    users AS u
			        LEFT JOIN
			    assigned_roles AS ar ON ar.user_id = u.id
			        LEFT JOIN
			    roles AS r ON r.id = ar.role_id
			WHERE
			    u.id = ".$user_id);
    }
}