<?php

namespace App\Controllers;

use Config\Encryption;

class Authentication extends BaseController
{
    public function Login() 
    {
        $this->session->destroy();
        return view('authentication/login');
    }

    public function LoginProc(){

        $reqEmail   = $this->request->getPost('email');
        $reqPasswd  = $this->request->getPost('password');

        $getData = $this->db->table('systemusers')->getWhere(['email' => $reqEmail])->getRow();

        if (password_verify($reqPasswd,$getData->password)) {
            $sessArr = [
                'id'        => $getData->id,
                'name'      => $getData->username,
                'email'     => $getData->email,
                'logged_in' => true,
            ];
            $this->session->set($sessArr);
            return redirect()->to('/home');
        }else {
            return redirect()->back()->with('message', 'username or password is wrong!');
        }
    }

    public function LogoutProc(){
        $this->session->destroy();
        return redirect()->to('/');
    }


}
