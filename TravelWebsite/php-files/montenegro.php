<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertex Balkans | Montenegro</title>
    <link rel="stylesheet" href="kosova.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
    <div class="header">


    <div class="nav">
        <div class="logo">
            <h3>BALKAN APEX JOURNEYS</h3>
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
                            <li><a href="montenegro.php>">Montenegro</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="navLi"><a href="#">Food & Drink</a></li>
            <li class="navLi"><a href="#">Plan a Trip</a></li>
            <li class="navLi"><button class="log-in-button" ><a href="LoginForm.html">Log In</a></button></li>
            <li onclick=showsidebar() class="navLi" id="ham-menu"><svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></li>

        </ul>
        <ul class="navUl-side">
            <li onclick= hidesidebar() id ="closeham"class="navLi-side"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
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
            <li class="navLi-side"><a href="LoginForm.html">Log In</a></li>


        </ul>

    </div>

    
    </div>
    <div class="dest-background" id="dest-background-me">
        <h1>MONTENEGRO</h1>
        <p>
            Mali i Zi është një destinacion turistik i njohur për bukurinë e peizazhit të tij malor dhe bregdetit të pafund. Mali i Zi ofron një përvojë të pasur për turistët që janë të interesuar për një kombinim të bukurisë natyrore, historisë, dhe kulturës lokale.
        </p>
    </div>
    <div class="container">
        <div class="about">
            <div class="about-image">
                <img src="pictures/montenegro3.jpeg" alt="">
            </div>
            <div class="about-content">
                <h2>NATYRA DHE AKTIVITETET</h2>
                <p>
                    Mal i Zi ka malin e tij të quajtur "Mali i Zi" ose "Prokletije", i cili është pjesë e Alpeve Dinare. Këto male ofrojnë mundësi të mëdha për aktivitete natyrore si zhytje dhe eksplorim të peizazheve të mahnitshme.
                </p>
                <a href="learn-more" class="learn-more">Learn More</a>
            </div>
        </div>
        <div class="about">
            
            <div class="about-content">
                <h2>BREGDETI DHE PLAZHET</h2>
                <p>
                    Bregdeti i Malit të Zi është një tjetër pjesë e veçantë e këtij destinacioni turistik. Qytete të tilla si Kotori dhe Budva janë të njohura për arkitekturën e tyre të lashtë, rrugicat kalldrëmuar, dhe plazhet e bukura. Bregdeti ofron gjithashtu mundësi për aktivitete detare si snorkeling dhe eksplorim të ishujve të vogël. 
                </p>
                <a href="learn-more" class="learn-more">Learn More</a>
            </div>
            <div class="about-image">
                <img src="pictures/ulcinj.jpg" alt="">
            </div>
        </div>
        <div class="about">
            <div class="about-image">
                <img src="pictures/montenegro4.jpeg" alt="">
            </div>
            <div class="about-content">
                <h2>KULTURA DHE USHQIMI</h2>
                <p>
                    Në Malin e Zi qytetet e vjetra historike janë një atraksion i veçantë për ata që janë të interesuar për historinë dhe kulturën lokale. Gjithashtu , vizitorët mund të shijojnë kuzhinën e pasur dhe autentike të këtij rajoni, duke provuar pjata tradicionale të përgatitura me produkte lokale.
                </p>
                <a href="learn-more" class="learn-more">Learn More</a>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <h2>BALKAN APEX JOURNEYS</h2>
            <p>Adventure awaits at every turn, and the summit is just a step away. Explore the hidden gems of the Balkans, where each city tells a story, and every peak whispers a secret.</p>
            <ul class="socials">
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="mail-outline"></ion-icon></a></li>
            </ul>
        </div>
    </footer>
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

            console.log('Scroll Y:', window.scrollY);

            if(window.scrollY > 0) {
                nav.classList.add('scrolled');
            }else {
                nav.classList.remove('scrolled');
            }
        })

    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>