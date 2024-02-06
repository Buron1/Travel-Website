


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balkan Apex Journeys</title>
    <link rel="stylesheet" href="loginForm.css">
</head>
<body>
    <div class="form" >
        <div class="login-form-box">
            <div class="form-value">
                <form action="login-process.php"  method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <label for="loginEmail">Email</label>
                        <input id="email" type="text"  name="loginEmail" required>
                        <div  id="emailError"></div>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <label for="loginPassword">Password</label>
                        <input id="password" type="password"  name="loginPassword" required>
                        <div  id="passwordError"></div>
                    </div>
                    <div class="forget">
                        <label ><input type="checkbox">Remember Me <a href="#">Forget Password</a></label>
                    </div>
                    <button type="submit" name="submit" value="submit">Log In</button>
                    <div class="register">
                        <p>Don't have an account <a href="RegisterForm.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>

        // let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
        // let passwordRegex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;

        // function validateForm()  {

        //     let emailInput = document.getElementById('email');
        //     let emailError = document.getElementById('emailError');
        //     let passwordInput = document.getElementById('password');
        //     let passwordError = document.getElementById('passwordError');


        //     emailError.innerText = '';
        //     passwordError.innerText = '';


        //     if(!emailRegex.test(emailInput.value)){
        //         emailError.innerText = 'invalid email';
        //         return;
        //     }
        //     if(!passwordRegex.test(passwordInput.value)){
        //         passwordError.innerText = 'invalid password';
        //         return;
        //     }

        //     alert('form submitted succesfully!');

        // }

    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>