<?php

class UserAuthentication {
    private $link;

    public function __construct() {
        $this->link = mysqli_connect("localhost", "root", "", "register");

        if (!$this->link) {
            die(mysqli_connect_error());
        }
    }

    public function loginUser($email, $password) {
        if (!empty($email) && !empty($password)) {
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($this->link, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);

                if ($user['role'] == 'admin') {
                    // Redirect to admin page
                    header("Location: dashboard.php");
                    exit();
                } else {
                    // Redirect to user page
                    header("Location: index.php");
                    exit();
                }
            } else {
                echo "Invalid email or password";
            }
        } else {
            echo "Please provide email and password";
        }
    }

    public function __destruct() {
        mysqli_close($this->link);
    }
}

if (isset($_POST["submit"])) {
    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];

    $authentication = new UserAuthentication();
    $authentication->loginUser($email, $password);
}
?>
