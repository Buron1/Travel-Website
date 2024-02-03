<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balkan Apex Journey | Kosova</title>
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
                            <li><a href="montenegro.php">Montenegro</a></li>
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
    <div class="dest-background" id="dest-background-xk">
        <h1>KOSOVA</h1>
        <p>
            Kosova, nje vend i vogel por me zemer te madhe.Energjia e njerezve dhe ngrohtesia e mikpritjes qe do te gjeni aty do t'ju beje te dashuroheni me kete vend. Historia dhe kultura te nderthurura me natyren magjepsese jane gjithcka qe ju duhet per nje pushim te paharrueshem me shoke, partner apo edhe me familje. Atraksione nga me te ndryshmet nuk do te ju lene te merziteni as edhe nje dite te vetme, cdo dite do te keni dicka te re per te bere.
        </p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="pictures/kosovaCity.jpg" alt="">
            </div>
            <div class="about-content">
                <h2>JETA DHE ENERGJIA</h2>
                <p>
                    Kosova ka rreth 1.8 milion banore, ku 53% jane nen moshen 25 vjecare duke e bere Kosoven vendin me popullsine me te re ne Europe. Kjo eshte nje treguesi me i mire i energjise dhe gjallerise neper qytetet e Kosoves. Qytete te mbushura me njerez te cilter qe e duan jeten dhe shijojne cdo moment eshte energjia qe nuk mund ta gjeni askund tjeter, do te ndiheni si ne shtepine tuaj. Baret dhe kafenete e qytetit jane cdo dite perplot me njerez, gjithashtu festivalet dhe jeta argetuese e nates do te kujdesen qe humori juaj te jete cdo here ne kulm.
                </p>
                <a href="learn-more" class="learn-more">Learn More</a>
            </div>
        </section>
        <section class="about">
            
            <div class="about-content">
                <h2>NATYRA DHE AKTIVITETET</h2>
                <p>
                    Sajperket gjeografise Kosova do te kete gjithashtu shumecka t'ju ofroje. Kosova karakterizohet me male qe shtrihen pergjate gjithe kufirit te Kosoves me shtetet fqinje. Keto male qendrojne krenare mbi fushat e bukura te Kosoves. Malet e Kosoves ofrojne nje mori gjerash te cilat mund te beni. Ato ofrojne shtigje te ecjes per t'i eksploruar keto male aq te bukura, shtigje te ciklizmit per te apasionuarit e bicikletave, nder shtigjet me te gjata te alpinizmit ne ballkan, resorte rekreative te skijimit, dhe per ata qe duan ta sfidojne veten mundesi per sporte ekstreme duke perfshire freeride skiing, paragliding.
                </p>
                <a href="learn-more" class="learn-more">Learn More</a>
            </div>
            <div class="about-image">
                <img src="pictures/Kosova.jpg" alt="">
            </div>
        </section>
        <section class="about">
            <div class="about-image">
                <img src="pictures/kosovaCulture.jpg" alt="">
            </div>
            <div class="about-content">
                <h2>HISTORIA DHE KULTURA</h2>
                <p>
                    Nese doni te zhyteni me thelle ne historine dhe kulturen e Kosoves, do te mahniteni nga ajo cka do te shihni dhe degjoni. Populli i Kosoves jane te rritur neper luftra dhe njihen per rezistencen dhe dashurine e tyre ndaj atdheut. Ndersa ne fushen e kultures jane shembull i cdo populli ne bote per Harmonine nderfetare se si muslimanet, te krishteret katolike dhe ata ortodoks kane jetuar gjithmone dhe jetojne ende ne harmoni dhe paqe te plote pa pasur anjehere ndikime dhe incidente me njeri-tjetrin, perkundrazi, ata jane bashke dhe i ndihmojne njeri-tjetrit ne cdo forme te mundshme.
                </p>
                <a href="learn-more" class="learn-more">Learn More</a>
            </div>
        </section>
        <section class="about">
            
            <div class="about-content">
                <h2>USHQIMI TRADICIONAL</h2>
                <p>
                    Nuk mund te kalojme pa e permendur edhe ushqimin te cilin do ta adhuroni posa ta shijoni. Ushqimet tradicionale shqiptare jane te jashtezakonshme duke ofruar nje llojshmeri te gjere te ushqimeve per shije te cdokujt.
                </p>
                <a href="learn-more" class="learn-more">Learn More</a>
            </div>
            <div class="about-image">
                <img src="pictures/kosovaFood.JPG" alt="">
            </div>
        </section>
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