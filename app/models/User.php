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
}