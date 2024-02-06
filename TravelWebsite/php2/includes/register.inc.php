<?php

if(isset($_POST['submit'])) {

    //Grabbing Data
     $fullName = $_POST['fullName'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $confirmpassword = $_POST['confirmpassword'];

     include "../classes/dbh.classes.php";
     include "../classes/register.classes.php";
     include "../classes/register-contr.classes.php";
     $register = new RegisterContr($fullName,$email,$password,$confirmpassword);

     $register->registerUser();

     header("location: ../index.php?error=none");
}