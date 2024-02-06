<?php

class Register extends Dbh {
    protected function getUser($fullName,$email,$password) {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_name, users_email,users_pwd) VALUES (?,?,?);');


        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($fullName,$email,$hashedPwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
       
    }

    protected function checkUser($fullName,$email) {
        $stmt = $this->connect()->prepare('SELECT users_name FROM users WHERE users_name = ? OR users_email = ?;');

        if(!$stmt->execute(array($fullName,$email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

    
} 