<?php

class RegisterContr extends Register{
    
    private $fullName;
    private $email;
    private $password;
    private $confirmpassword;

    public function __construct($fullName,$email,$password,$confirmpassword) {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->password = $password;
        $this->confirmpassword = $confirmpassword;
    }
    
    public function registerUser() {
        if($this->emptyInput() == false) {
            //echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidName() == false) {
            //echo "Invalid Name!";
            header("location: ../index.php?error=Name");
            exit();
        }
        if($this->invalidEmail() == false) {
            //echo "Invalid Email!";
            header("location: ../index.php?error=Email");
            exit();
        }
        if($this->pwdMatch() == false) {
            //echo "Passwords don't match!";
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if($this->nameTakenCheck() == false) {
            //echo "Name or Email is already taken!";
            header("location: ../index.php?error=nametaken");
            exit();
        }

        $this->setUser($this->fullName, $this->email,$this->password);

    }
    private function emptyInput() {
        $result;
        if(empty($this->fullName) || empty($this->email) || empty($this->password) || empty($this->confirmpassword) ){
            $result = false;

        }else {
            $result = true;
        }
        return $result;
    }

    private function invalidName() {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->fullName )) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;
        if($this->password !== $this->confirmpassword) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function nameTakenCheck() {
        $result;
        if(!$this->checkUser($this->fullName, $this->email)) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    
    
} 