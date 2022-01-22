<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    private $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function createUser(Request $request){
        return $this->authService->createUser($request->all());
    }


}
