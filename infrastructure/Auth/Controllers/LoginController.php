<?php

namespace Infrastructure\Auth\Controllers;

use Infrastructure\Abstracts\Controller;
use Infrastructure\Auth\Requests\LoginRequest;
use Infrastructure\Auth\Services\LoginService;

class LoginController extends Controller
{
    private $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function login(LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        return $this->response($this->loginService->attemptLogin($email, $password));
    }

    public function refresh()
    {
        return $this->response($this->loginService->attemptRefresh());
    }

    public function logout()
    {
        $this->loginService->logout();

        return $this->response(null, 204);
    }
}
