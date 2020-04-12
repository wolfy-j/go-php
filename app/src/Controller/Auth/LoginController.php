<?php


namespace App\Controller\Auth;


use App\Request\LoginRequest;
use Spiral\Prototype\Traits\PrototypeTrait;

class LoginController
{
    use PrototypeTrait;

    public function login(LoginRequest $login)
    {
        return [
            'Test'
        ];
    }

    public function loginPost(LoginRequest $login)
    {
        if (!$login->isValid()) {
            return [
                'status' => 400,
                'errors' => $login->getErrors()
            ];
        }

        // application specific login logic
        $user = $this->users->findOne(['username' => $login->getField('username')]);
        if (
            $user === null
            || !password_verify($login->getField('password'), $user->password)
        ) {
            return [
                'status' => 400,
                'error'  => 'No such user'
            ];
        }

        // create token
        $this->auth->start(
            $this->authTokens->create(['userID' => $user->id])
        );

        return [
            'status'  => 200,
            'message' => 'Authenticated!'
        ];
    }

    public function logout()
    {
        $this->auth->close();
    }
}