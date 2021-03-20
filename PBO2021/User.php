<?php
    class User
    {
        public $username;
        public $password;

        public function login(){
            return '$this->username berhasil loginn';
        }

     public function setUsername($username){
        $this->username=$username;
    }
    public function setPassword($password){
        $this->password=$password;
    }

    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
}
?>