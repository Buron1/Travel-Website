<html>
    <head>
        <meta charset="UTF-8">
        <title>Balkan Apex Journeys</title>
        <link rel="stylesheet" type="text/css" media="screen" href="Style.css"/>
    </head>
    <body>
        <div class="nav" style="background-color:#4caf50; ">
            <div class="logo">
                <h3 id="text-logo">BALKAN APEX JOURNEYS</h3>
            </div>
            <ul class="navUl">
                <li class="navLi"><a href="index.php">Home</a></li>
                <li class = "Things-to-do navLi">
                    <a href="#">Things To Do</a>
                    <div class="flyout-parent">
                        <div class="flyout-box">
                            <ul class="nav-fly">
                                <li><a href="Kosova.php">Kosove</a></li>
                                <li><a href="Albania.php">Albania</a></li>
                                <li><a href="montenegro.php">Montenegro</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="navLi"><a href="#">Food & Drink</a></li>
                <li class="navLi"><a href="#">Plan a Trip</a></li>
                <li class="navLi"><button class="log-in-button" ><a href="LoginForm.php">Log In</a></button></li>
                <li onclick=showsidebar() class="navLi" id="ham-menu"><svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></li>

            </ul>
            <ul class="navUl-side">
                <li onclick= hidesidebar() id ="closeham" class="navLi-side"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li class="navLi-side"><a href="index.php">Home</a></li>
                <li class = "  navLi-side">
                    <a href="#">Things To Do</a>
                    <!--                    <div class="flyout-parent">-->
                    <!--                        <div class="flyout-box">-->
                    <!--                            <ul class="nav-fly">-->
                    <!--                                <li><a href="#">Kosove</a></li>-->
                    <!--                                <li><a href="#>">Albania</a></li>-->
                    <!--                                <li><a href="#>">Montenegro</a></li>-->
                    <!--                            </ul>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </li>
                <li class="navLi-side"><a href="#">Food & Drink</a></li>
                <li class="navLi-side"><a href="#">Plan a Trip</a></li>
                <li class="navLi-side"><a href="LoginForm.php">Log In</a></li>


            </ul>

        </div>

        <script>
        function showsidebar() {
             const sidebar = document.querySelector('.navUl-side');
             sidebar.style.display = 'flex';
        }
        function hidesidebar() {
            const sidebar = document.querySelector('.navUl-side');
            sidebar.style.display = 'none';
        }

        document.addEventListener('scroll',() => {
            const nav = document.querySelector(".nav");

            // console.log('Scroll Y:', window.scrollY);

            if(window.scrollY > 0) {
                nav.classList.add('scrolled');
            }else {
                nav.classList.remove('scrolled');
            }
        })

        const destinationDiv = document.getElementById('KosoveDest');
        const destinationDiv2 = document.getElementById('AlbaniaDest');
        const destinationDiv3= document.getElementById('MontenegroDest');
        const logo = document.getElementById('text-logo');


        destinationDiv.addEventListener('click', function (){
            window.location.href = "#";
        })
        destinationDiv2.addEventListener('click', function (){
            window.location.href = "#";
        })
        destinationDiv3.addEventListener('click', function (){
            window.location.href = "#";
        })
        logo.addEventListener('click', function (){
            window.location.href = "index.php";
        })

    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>