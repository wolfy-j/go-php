<?php


namespace App\Controller\Auth;


use App\Request\LoginRequest;
use Spiral\Prototype\Traits\PrototypeTrait;

class LoginController
{
    use PrototypeTrait;

    public function login(LoginRequest $login)
    {
        return $this->views->render('auth/login.dark.php');
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
        $token = $this->authTokens->create(['userID' => $user->id]);
        $d = $this->auth->start(
            $token
        );

        return [
            'status'  => 200,
            'message' => 'Authenticated!',
            'token' => $this->auth->getActor(),
            'd' => $d
        ];
    }

    public function logout()
    {
        $this->auth->close();
    }
}