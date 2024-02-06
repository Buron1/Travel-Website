<?php
echo "test";
include_once 'dbh.classes.php';
class Login extends Dbh {
    protected function getUser($fullName,$password) {
        $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_name = ? OR users_email= ?');


       
        if(!$stmt->execute(array($fullName,$fullName))) {
            
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password, $pwdHashed[0]["users_pwd"]);
      

        if($checkPwd == false){
            $stmt = null;
            header ("location: ../index.php?error=wrongpassword");
        }else if($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE (users_name = ? OR users_email=?) AND users_pwd = ?;');
            if(!$stmt->execute(array($fullName,$fullName,$pwdHashed[0]["users_pwd"]))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0) {
                $stmt =null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }
             $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["username"] = $user[0]["users_name"];

            $stmt = null;
        }

       

       
    }

   

    
} 