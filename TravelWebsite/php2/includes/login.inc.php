<?php

if(isset($_POST['submit'])) {

    //Grabbing Data
     $fullName = $_POST["fullName"];
     $password = $_POST["password"];

     include "../classes/dbh.classes.php";
     include "../classes/login.classes.php";
     include "../classes/login-contr.classes.php";
     $login = new LoginContr($fullName,$password);

     $login->loginUser();

     header("location: ../index.php?error=none");
}