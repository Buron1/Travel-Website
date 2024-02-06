

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
        <div class="register-form-box">
            <div class="form-value">
                <form action="includes/register.inc.php" method="post" onsubmit="return validateForm(event);" >
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <label for="fullName">Full Name</label>

                        <input type="text" id="fullName" name="fullName" required>
                        <div  id="fullNameError"></div>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <label for="email">Email</label>

                        <input type="text" id="email" name="email"required>
                        <div  id="emailError"></div>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="key-outline"></ion-icon>
                        <label for="password">Password</label>

                        <input type="password" id="password" name="password"required>
                        <div  id="passwordError"></div>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="key-outline"></ion-icon>
                        <label for="password">Confirm Password</label>
                        <input type="password" name="confirmpassword"required>
                    </div>
                    <button type="submit" name="submit" value="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
     <script>

      let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
        // let fullNameRegex = /^[a-z]+[A-Z]$/;
        let passwordRegex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;

        function validateForm()  {

            let emailInput = document.getElementById('email');
            let emailError = document.getElementById('emailError');
            let passwordInput = document.getElementById('password');
            let passwordError = document.getElementById('passwordError');
            let fullNameInput = document.getElementById('fullName')
            let fullNameError = document.getElementById('fullNameError')

            fullNameError.innerText='';
            emailError.innerText = '';
            passwordError.innerText = '';

            if(!fullNameRegex.test(fullNameInput.value)){
                fullNameError.innerText = 'invalid name';
                event.preventDefault();
                return false;
            }
            if(!emailRegex.test(emailInput.value)){
                emailError.innerText = 'invalid email';
                event.preventDefault();
                return false;
            }
            if(!passwordRegex.test(passwordInput.value)){
                passwordError.innerText = 'invalid password';
                event.preventDefault();
                return false;
            }

            alert('form submitted succesfully!');
            return true;
        }
  
    

    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>