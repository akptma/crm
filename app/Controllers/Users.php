<?php

namespace App\Controllers;

class Users extends BaseController
{
    protected $_table = 'systemusers';

    private function checking($params,$where){
        $username   = $this->db->table($this->_table)->select('username')->getWhere(['username' => $where])->getFirstRow();
        $email      = $this->db->table($this->_table)->select('username')->getWhere(['email' => $where])->getFirstRow();

        if ($params == 'username') {
            return !$username ? true : false;
        }elseif ($params == 'email') {
            return !$email ? true : false;
        }
    }

    public function index()
    {
        $usersData = $this->db->table($this->_table)->get()->getResult();
        return view('users/list_users',['users' => $usersData]);
    }

    public function create() {
        return view('users/partial');
    }

    public function createProc(){
        if ($this->request->getMethod() === 'POST') {
           $arrUsr = [
            'id'  => uuid(),
            'username'  => $this->request->getPost('username'),
            'email'     => $this->request->getPost('email'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
           ];

           if ($this->checking('username',$this->request->getPost('username'))) {
            try {
                $this->db->table($this->_table)->insert($arrUsr);
                return redirect()->to('/users')->with('message', 'data berhasil ditambahkan');
            }catch(\Exception $e){
                log_message('error', 'error insert data users ' . $e->getMessage());
                return redirect()->back()->with('message', $e->getMessage());
            };
           }else {
            return redirect()->back()->with('message', 'username sudah ada');
           }
       }
    }

    public function update($userId){
        try {
            $dataUser = $this->db->table($this->_table)->getWhere(['id'=>$userId])->getFirstRow();
            return view('users/partial', ['user' => $dataUser]);
        } catch (\Exception $e) {
            log_message('error', 'error get data users ' . $e->getMessage());
            return redirect()->back()->with('message', $e->getMessage());
        }
    }

    public function updateProc($userId){
        try {
            $arrUpdate = [];

            $passwordCheck = $this->db->table($this->_table)->select('password')->getWhere(['id' => $userId])->getFirstRow()->password;
            $passwordHash  = $this->request->getPost('password'); 

            if (password_verify($passwordHash, $passwordCheck)) {
                $arrUpdate['password'] = $passwordHash; 
            }

            if ($this->checking('email',$this->request->getPost('email'))) {
                $arrUpdate['email'] = $this->request->getPost('email');
            }
            
            if (count($arrUpdate) > 0) {
                $this->db->table($this->_table)->set($arrUpdate)->where('id', $userId)->update();
            }

            return redirect()->to('users')->with('message', 'update data user berhasil');
           
        } catch (\Exception $e) {
            log_message('error', 'error update data users ' . $e->getMessage());
            return redirect()->back()->with('message', $e->getMessage());
        }
    }

    public function destroy($userId) {
        try {
            $arrUpdate = ['updated_at' => datenow(),'deleted_at' => datenow()];
            $this->db->table($this->_table)->set($arrUpdate)->where('id', $userId)->update();
            return redirect()->back()->with('message', 'hapus data user berhasil');
        } catch (\Exception $e) {
            log_message('error', 'error delete data users ' . $e->getMessage());
            return redirect()->back()->with('message', $e->getMessage());
        }
    }

    
}
