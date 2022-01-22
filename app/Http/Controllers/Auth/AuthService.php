<?php

namespace App\Http\Controllers\Auth;

class AuthService
{
    private $authQuery;
    public function __construct(AuthQuery $authQuery)
    {
        $this->authQuery = $authQuery;
    }
    public function createUser($data){
        return $this->authQuery->createUser($data);
    }

}
