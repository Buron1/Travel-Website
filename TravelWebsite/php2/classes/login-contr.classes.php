<?php



class LoginContr extends Login {
    
    private $fullName;
    private $password;
    public function __construct($fullName,$password) {
        $this->fullName = $fullName;
        $this->password = $password;
    }
    
    public function loginUser() {
        if($this->emptyInput() == false) {
            //echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
       

        $this->getUser($this->fullName,$this->password);

    }
    private function emptyInput() {
        $result;
        if(empty($this->fullName) || empty($this->password)  ){
            $result = false;

        }else {
            $result = true;
        }
        return $result;
    }

  

    
    
} 