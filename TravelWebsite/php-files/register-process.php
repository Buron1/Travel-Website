<?php 
    //  print_r($_POST);
 
  

        
class UserRegistration {

    
        private $link;
    
        public function __construct() {
            $this->link = mysqli_connect("localhost", "root", "", "register");
    
            if (!$this->link) {
                die(mysqli_connect_error());
            }
        }
    
        public function registerUser($name, $email, $password, $confirmPassword) {
            if (!empty($name) && !empty($email) && !empty($password) && !empty($confirmPassword)) {
                $sql = "INSERT INTO users (name, email, password, confirmpassword) VALUES ('$name', '$email', '$password', '$confirmPassword')";
    
                if (mysqli_query($this->link, $sql)) {
                    echo "Record inserted successfully";
                    header("Location: LoginForm.php");
                } else {
                    echo "Record insert went wrong: " . mysqli_error($this->link);
                }
            } else {
                echo "Please provide all information";
            }
        }
    
        public function __destruct() {
            mysqli_close($this->link);
        }
    }
    
    if (isset($_POST["submit"])) {
        $name = $_POST["fullName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmpassword"];
    
        $registration = new UserRegistration();
        $registration->registerUser($name, $email, $password, $confirmPassword);

  

    }
  
    
?>
    

