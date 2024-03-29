<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Balkan Apex Journeys</title>
        <link rel="stylesheet" type="text/css" media="screen" href="Style.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="footer.css"/>

        <style>

        </style>
    </head>
    <body>



    <div class="header">



        <div class="nav">
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
                <li class="navLi"><a href="reviews-display.php">Reviews</a></li>

                <?php
                    if(isset($_SESSION['userid'])){
                        if($_SESSION['role']==1) {
                            echo '<li class="navLi"><button class="log-in-button" ><a href="dashboard.php">Dashboard</a></button></li>';
                        }
                        
                        echo ' <li class="navLi"><button class="log-in-button" ><a href="logout-process.php">Log Out</a></button></li>';
                        echo ' <li style="display:block;"><a href="#" style=" color: white;margin-left: 20px;">'. $_SESSION['name'].'</a></li>';
                    }

                    else {
                        echo '<li class="navLi"><button class="log-in-button" ><a href="LoginForm.php">Log In</a></button></li>';
                    }
                ?>
                
                
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




    </div>
    <div class="main-slider">
        <div class="overlay">

        </div>
        <div id="slider-textbox">
            <div id="slider-text" >
                <h1>"Adventure awaits at every turn, and the summit is just a step away. Explore the hidden gems of the Balkans, where each city tells a story, and every peak whispers a secret."</h1>
            </div>
        </div>
    </div>

    <div class="mid-container">
        <div class="mid-header">
            <h1>DESTINATIONS</h1>
        </div>
        <div class="destinations">

            <div class="city"  id="KosoveDest">


                <div class="city-overlay">

                </div>
                <div class="inside-h2" >
                    <h2>KOSOVE</h2>
                </div>
                <div class="inside-p" >
                    <p>Kosovo is a disputed territory in Southeast Europe in the Balkans. It is landlocked and borders Albania, Macedonia, Montenegro, and Serbia. Most of Kosovo's terrain is mountainous. The government system is a republic...</p>
                </div>
                <div class="city-button">
                    <button><a href="#">Read More</a></button>
                </div>


            </div>
            <div class="city" id="AlbaniaDest">
                <div class="city-overlay">

                </div>
                <div class="inside-h2" >
                    <h2>ALBANIA</h2>
                </div>
                <div class="inside-p" >
                    <p>Albania is known as 'the country of eagles' and is situated in Eastern Europe, west of the Balkan Sea and east of the Adriatic and Ionian Sea. Geographically, it shares frontiers with Montenegro, Kosovo, Macedonia, and Greece...</p>
                </div>
                <div class="city-button">
                    <button><a href="#">Read More</a></button>
                </div>


            </div>
            <div class="city" id="MontenegroDest">
                <div class="city-overlay">

                </div>
                <div class="inside-h2" >
                    <h2>MONTENEGRO</h2>
                </div>
                <div class="inside-p" >
                    <p>Montenegro is a Balkan country with rugged mountains, medieval villages and a narrow strip of beaches along its Adriatic coastline. The Bay of Kotor, resembling a fjord, is dotted with coastal churches...</p>
                </div>
                <div class="city-button">
                    <button><a href="#">Read More</a></button>
                </div>
            </div>
        </div>
        <div class="mid-header">
            <h1>ACTIVITIES</h1>
        </div>
        <div class="activities-container">
            <div class="activities reverse">
                <div class="act-img right ski-bottom" >
                    <img src="pictures/ski-act.jpeg">
                </div>
                <div class="act-textbox" id="ski">

                    <h1>SKIING</h1>
                    <p>
                        Welcome to the exhilarating world of skiing, where the crisp mountain air meets the thrill of carving through pristine snow-covered slopes. Whether you're a seasoned veteran seeking the perfect powder or a novice eager to embrace the slopes for the first time, our skiing haven is your ultimate destination for all things snow and adventure.
                    </p>
                    <div class="act-button" >
                        <button><a>Learn More</a></button>
                    </div>

                </div>
            </div>
            <div class="activities ">

                <div class="act-textbox"  id="hike">

                    <h1>HIKING</h1>
                    <p>
                        Step into the world of exploration and tranquility with our hiking haven. Hiking is not merely a pastime; it's a journey into the heart of nature, an escape from the everyday hustle, and a celebration of the great outdoors.Our hiking community is your gateway to discovering the beauty and serenity of the world's most captivating landscapes.
                    </p>
                    <div class="act-button">
                        <button><a>Learn More</a></button>
                    </div>

                </div>
                <div class="act-img left  hiking-bottom">
                    <img src="pictures/hiking.jpg">
                </div>
            </div>
            <div class="activities reverse">
                <div class="act-img right" >
                    <img src="pictures/jeep.jpg">
                </div>
                <div class="act-textbox" id="offroad">

                    <h1>OFFROAD DRIVING</h1>
                    <p>
                        Rev up your engines and dive into the rugged world of offroading, where adventure knows no bounds. Offroading isn't just a sport; it's a way of life, a pulse-pounding journey that takes you beyond the beaten path and into the heart of untamed terrains.Our offroading hub is your ultimate pit stop for adrenaline-fueled escapades.
                    </p>
                    <div class="act-button" >
                        <button><a>Learn More</a></button>
                    </div>

                </div>
            </div>
            <div class="activities">

                <div class="act-textbox"  id="mtb">

                    <h1>MOUNTAIN BIKING</h1>
                    <p>
                        Welcome to the heart-pounding world of mountain biking, where the trail becomes your canvas and the great outdoors your playground. Mountain biking isn't just a sport; it's a symphony of skill, adrenaline, and nature's raw beauty. Our mountain biking hub is your ultimate destination for all things two-wheeled adventure.
                    </p>
                    <div class="act-button">
                        <button><a>Learn More</a></button>
                    </div>

                </div>
                <div class="act-img left">
                    <img src="pictures/mtb.jpeg">
                </div>
            </div>
            <div class="discover-more">
                <h1>DISCOVER MORE ACTIVITIES</h1>
                <div class="icon-container">
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 512 512"><path  d="M185 58.59c-15-.38-30 13.1-33.1 33.43-3.3 21.68 8.8 39.98 24.8 42.38 16 2.4 32.9-11.5 36.1-33.2 3.3-21.72-8.7-39.94-24.8-42.35-1-.15-2-.24-3-.26zm113.3 77.21l-17.2 5.2 8.3 28.1 18.9.5zm-144.6 7.6c-2.7 70.5-.4 140.9-3.6 202.5-15.8 35.8-36.7 70.2-50.38 99.2l25.68 12.4c20.8-33.7 42.2-68 55.2-102.9l11.3-63.4 53 45.9 16.2 88.1 29.3-5.8-17.6-100.6-58.1-53.6-9.3-86.4 48.1 31.3c26.7.9 45.1-1.9 69.6-5.7l1-16.3-70.8-2.1-46.5-42c-9.5 6.7-20.9 10-32.8 8.2-7.7-1.2-14.5-4.3-20.3-8.8zm-16.6 13l-40.47 11.7-5.96 85.5c13.53 6.7 31.03 11.6 43.23 3.4zm352.7 65.3l-95.7 78.1-32 51.9L324 222.5c-6.3.9-12.2 1.8-18 2.6l43.5 147.1-22.6 36.7-19.4 3.4 3.7 21.3-64.5 12.8-4.2-22.7-84.3 14.8c-9.5 15.6-17.1 27.9-26 42.2l-49.52-23.9-62.64 34.8H489.8z"/></svg>
                    </div>
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" width="800px" height="800px" viewBox="-5.99 0 122.88 122.88" version="1.1" id="Layer_1" style="enable-background:new 0 0 110.9 122.88" xml:space="preserve">
                            <g>
                                <path class="st0" d="M39.99,37.79l16.32-11.94L39.36,14.86c-1.59-1.03-2.04-3.15-1.01-4.74c1.03-1.59,3.15-2.04,4.74-1.01 l19.14,12.41l3.74-2.74c3.05-1.9,6.34-3.18,8.99-2.83c2.21,0.3,4.25,1.5,6.1,3.84c4.31,5.38,6.96,12.29,9.36,20l9.89,6.41 l3.25-0.38c4.48-0.2,6.6,4.45,5.08,7.55c0.02,0.67-0.16,1.36-0.55,1.96c-1.03,1.59-3.15,2.04-4.74,1.01l-0.27-0.18l-9.34,1.03 c-5.04,0.57-8.72,1.96-11.46-3.72l-5.81-14.57l-0.76-0.49L58.52,50.38c-1.09,1.14-1.25,2.26-0.16,3.4l13.23,9.62 c1.74,1.17,3.21,2,3.57,4.34c0.49,3.15-10.32,22.66-14.43,29.9l23.12,11.7c3.87,1.68,7.09,2.38,9.6,2.03 c1.93-0.26,3.53-1.33,4.77-3.24c1.72-2.64,5.25-3.39,7.9-1.68c2.64,1.72,3.4,5.25,1.68,7.9c-3.16,4.87-7.46,7.61-12.82,8.34 c-4.61,0.63-9.85-0.37-15.7-2.91c-0.22-0.08-0.43-0.17-0.64-0.28L3.14,81.29c-2.82-1.42-3.95-4.86-2.53-7.67 c1.42-2.82,4.86-3.95,7.67-2.53l39.79,20.14l10.63-19.02c-2.99-1.78-5.89-3.56-8.68-5.34C40.71,60.96,28.32,47.41,39.99,37.79 L39.99,37.79L39.99,37.79z M98.62,0c6.78,0,12.28,5.5,12.28,12.28c0,6.78-5.5,12.28-12.28,12.28s-12.28-5.5-12.28-12.28 C86.34,5.5,91.84,0,98.62,0L98.62,0L98.62,0z"/>
                            </g>

                    </svg>
                    </div>
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1"><defs><style>.cls-1{fill:none;stroke:white;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><line class="cls-1" x1="15.87" y1="17.8" x2="12" y2="17.8"/><polyline class="cls-1" points="7.71 17.8 5.32 17.8 5.32 12.07 6.27 6.34 17.73 6.34 19.64 12.07 22.5 12.07 22.5 17.8 20.54 17.8"/><circle class="cls-1" cx="18.2" cy="18.27" r="2.39"/><circle class="cls-1" cx="9.61" cy="18.27" r="2.39"/><line class="cls-1" x1="19.64" y1="12.07" x2="8.18" y2="12.07"/><line class="cls-1" x1="12.95" y1="8.25" x2="12.95" y2="12.07"/><rect class="cls-1" x="1.5" y="9.2" width="3.82" height="6.68" rx="1.91"/></svg>
                    </div>
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" width="800px" height="800px" viewBox="0 0 556.748 556.748" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M479.883,159.436c-7.095-13.923-24.9-24.815-40.525-24.815h-12.087c-11.657,0-28.19-7.239-36.108-15.816L289.044,8.329    C284.091,2.955,277.904,0,271.65,0c-8.233,0-15.472,4.896-19.842,13.406l-94.726,184.547c-3.156,6.148-9.448,9.974-16.409,9.974    c-2.859,0-5.604-0.641-8.167-1.913l-33.287-16.648c-4.236-2.123-9.008-3.251-13.78-3.251c-11.484,0-22.003,6.177-27.454,16.113    l-38.938,70.916c-2.582,4.714-2.754,9.62-0.478,13.464c2.285,3.863,6.674,6.071,12.048,6.071h150.313l34.808-34.884    c9.496-10.844,22.749-12.087,27.97-12.087c0.976,0,1.712,0.048,2.324,0.086c-0.048-0.842-0.249-1.635-0.249-2.486    c0-25.188,20.483-45.651,45.661-45.651c25.179,0,45.661,20.473,45.661,45.642c0,24.222-19.067,43.911-42.974,45.327l2.592,4.063    h229.223c5.345,0,9.744-2.189,12.096-6.034c2.343-3.824,2.305-8.769-0.124-13.502L479.883,159.436z M146.888,223.036V233    c0,6.665-5.374,12.708-11.991,13.493l-1.673,0.201c-6.627,0.774-15.042,4.791-18.791,8.969c-3.758,4.169-11.58,5.001-17.461,1.855    l-1.339-0.708c-5.881-3.136-16.075-5.689-22.749-5.689c-6.675,0-10.72-5.231-9.027-11.705l8.74-33.498    c0.296-1.147,0.43-2.18,0.498-3.136c3.414-2.84,7.698-4.59,12.335-4.59c2.955,0,5.766,0.66,8.376,1.979l33.287,16.629    c4.255,2.142,8.826,3.204,13.569,3.204c2.391,0,4.714-0.335,6.971-0.861C147.185,220.425,146.888,221.726,146.888,223.036z     M400.524,146.449l-26.097,73.65c-2.209,6.292-7.727,7.44-12.287,2.563l-3.118-3.318c-4.552-4.886-10.948-13.512-14.276-19.297    l-4.571-7.937c-3.327-5.785-8.721-8.109-12.067-5.192c-3.338,2.936-7.736,0.153-9.821-6.177l-7.535-22.931    c-2.084-6.35-7.19-7.287-11.398-2.113l-13.444,16.553c-4.208,5.183-7.622,3.978-7.622-2.697v-25.675    c0-6.674-4.016-8.472-8.988-4.006l-12.23,11.016c-4.953,4.465-8.147,2.744-7.124-3.844l6.856-44.074    c1.023-6.598-2.247-8.425-7.306-4.083l-2.812,2.391c-5.059,4.341-8.195,2.553-7-4.026l9.505-52.278l13.378-26.067    c4.026-7.851,11.685-8.845,17.614-2.419L382.298,126.99c5.24,5.67,13.005,10.672,21.354,14.239    C402.408,142.682,401.279,144.336,400.524,146.449z M487.629,214.162c-6.35-2.008-11.522,1.052-11.522,6.847    c0,5.804-3.166,6.101-7.048,0.669l-0.994-1.349c-3.893-5.422-9.085-9.801-11.59-9.801c-2.496,0-6.216-4.447-8.301-9.907    c-2.084-5.46-6.139-7.879-9.056-5.374c-2.936,2.496-5.288-0.899-5.288-7.555v-4.533c0-6.674-4.743-12.087-10.586-12.087    c-5.833,0-9.409-5.297-7.984-11.8c0,0,0.956-4.37,2.123-9.725c0.296-1.368,0.354-2.697,0.21-3.959    c3.348,0.669,6.617,1.109,9.688,1.109h12.087c11.102,0,24.738,8.338,29.777,18.216l26.393,51.714L487.629,214.162z"/>
                                    <path d="M293.013,276.519c17.279,0,31.317-13.971,31.317-31.26c0-17.251-14.047-31.289-31.317-31.289    c-17.26,0-31.298,14.066-31.298,31.289C261.734,262.548,275.753,276.519,293.013,276.519z"/>
                                    <path d="M227.481,269.892l-66.191,66.326c-4.255,4.608-6.742,10.776-6.742,17.509c0,9.792,5.47,18.437,13.502,22.901    l67.406,37.476v70.485c0,9.945,8.062,18.102,18.025,18.102c9.993,0,18.063-8.128,18.063-18.102v-88.08    c0,0,2.391-14.019-13.598-21.697l-38.881-20.482l41.951-41.54l20.32,31.843c3.567,5.643,8.482,7.899,13.034,7.804h60.454    c18.752,0,18.752-24.48,0-24.48l-52.221,0.115l-34.349-53.875c0,0-7.287-12.106-21.124-12.106    C247.123,262.108,235.628,260.616,227.481,269.892z"/>
                                    <path d="M376.063,386.086c-47.114,0-85.364,38.135-85.364,85.316c0,47.191,38.269,85.346,85.364,85.346    c47.047,0,85.288-38.174,85.288-85.346C461.352,424.202,423.11,386.086,376.063,386.086z"/>
                                    <path d="M45.774,471.402c0,47.172,38.26,85.346,85.269,85.346c47.191,0,85.383-38.174,85.383-85.346    c0-47.182-38.221-85.316-85.383-85.316C84.034,386.086,45.774,424.25,45.774,471.402z"/>
                                </g>
                            </g>
                            </svg>
                    </div>
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" width="800px" height="800px" viewBox="0 0 471.006 471.006" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M92.836,83.896c29.52-23.447,18.475-73.21-18.379-82.438C41.82-6.747,11.555,20.889,16.614,54.262    C21.998,89.777,64.57,106.32,92.836,83.896z"/>
                                    <path d="M123.351,111.551c-5.776-11.408-20.015-16.667-31.824-11.743l-45.068,18.819c-8.128,3.404-13.005,10.815-13.569,18.886    l-0.163-0.306c0,0-18.886,54.057,0,89.763c13.129,24.824,42.056,37.352,58.484,42.688l6.541,14.009    c0.21,0.439,0.498,0.804,0.717,1.224l0.44,0.938l0.086-0.038c4.456,7.755,12.049,12.785,20.521,14.124    c-5.307,29.835-3.203,73.401,38.355,109.012c1.09,0.938,2.429,1.396,3.768,1.396c1.625,0,3.251-0.679,4.389-2.018    c2.084-2.429,1.807-6.082-0.631-8.166c-39.024-33.46-39.818-73.957-34.348-100.751c0.641-0.162,1.281-0.229,1.922-0.431    l113.956-37.149l128.902,81.645c3.262,2.056,6.771,3.327,10.347,3.978l29.567,82.783c4.312,12.048,14.746,28.4,23.313,36.519    c8.578,8.118,15.539,4.332,15.559-8.453l0.334-395.448c0-14.248-11.446-25.685-25.675-25.685h-264.02    c-3.137-4.504-8.339-7.459-14.239-7.459h-14.478c-5.68,0-11.006,2.783-14.258,7.449c-3.242,4.657-4.016,10.614-2.037,15.95    l29.95,80.975l-14.631,1.674L123.351,111.551z M276.856,99.951c12.432,3.031,23.858,15.683,25.522,28.257    c1.664,12.565,12.947,25.761,25.197,29.462l58.876,17.777c12.25,3.701,24.987,15.319,28.439,25.953    c3.442,10.633,2.065,28.735-3.127,40.43l-19.307,43.596l-126.053-79.828c-7.325-4.619-16.257-5.756-24.48-3.069l-50.795,16.562    c20.253-20.684,56.581-65.914,58.713-125.718L276.856,99.951z M176.164,166.057c5.307-0.612,10.031-3.614,12.823-8.166    c2.792-4.552,3.347-10.127,1.492-15.128l-25.962-70.179l73.803,17.978c-1.205,64.222-45.202,111.173-61.621,126.483    l-24.394-48.262L176.164,166.057z"/>
                                </g>
                            </g>
                            </svg>
                    </div>
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" width="800px" height="800px" viewBox="0 0 568.822 568.822" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M482.595,292.638c55.214-67.941,49.505-155.849,43.682-193.764c-1.606-10.442-9.371-25.13-16.764-32.666    C471.665,27.7,442.04,11.3,424.35,4.338c-9.83-3.863-11.504,0.201-5.154,8.645c11.618,15.443,27.119,45.546,30.103,98.188    c3.366,59.431-20.722,132.001-33.134,164.925c-3.729,9.887-0.507,23.465,9.018,28.037    C461.347,321.479,482.595,292.638,482.595,292.638z"/>
                                <path d="M349.791,1.747c-53.168,10.911-80.201,49.878-84.006,78.211c-0.517,3.911,0.612,10.136,2.295,13.694    c4.476,9.419,14.401,25.885,29.988,27.903c3.892,0.516,9.352-2.372,12.163-5.097c15.539-15.013,64.222-59.383,111.308-74.262    C421.538,42.196,407.577-10.101,349.791,1.747z"/>
                                <circle cx="137.16" cy="211.175" r="38.308"/>
                                <path d="M93.641,257.84l-50.901,91.484c-7.879,13.961-2.974,31.747,10.834,39.599l102.883,62.07    c3.624,2.056,8.864,6.903,11.217,10.375l7.765,11.427h-0.057c-63.285,4.781-90.193,16.429-101.611,25.341    c-4.781,3.739-7.373,10.901-7.373,15.74v11.81c0,4.848,2.591,12.02,7.373,15.74c11.781,9.198,45.68,24.977,140.215,27.243    c4.284,0.105,8.473,0.153,12.565,0.153c96.265,0,139.487-27.713,153.592-39.618c2.745-2.313,4.313-5.747,4.313-9.409    c0-3.682-1.568-7.105-4.313-9.409c-13.406-11.322-54.353-37.82-144.555-39.493l-6.608-0.125l-15.988-31.805    c-2.63-5.278-8.3-12.326-12.891-16.046l-75.735-61.563c-1.54-1.252-1.874-3.672-0.717-5.297l5.394-7.66    c3.547,3.634,8.73,6.072,13.588,6.072h112.656c0.736,0,2.152-0.048,3.547-0.392l37.332,47.697c1.884,2.41,4.695,3.672,7.535,3.672    c2.056,0,4.141-0.659,5.881-2.037c4.16-3.251,4.896-9.266,1.636-13.416l-86.062-109.968c-3.261-4.16-9.266-4.916-13.416-1.635    c-4.16,3.251-4.896,9.265-1.635,13.416l27.225,34.788c-3.108-0.669-6.56-1.032-10.347-1.032h-61.946    c-7.669,0-17.566-2.065-18.484-3.701l-19.747-44.188c-0.029-0.067-2.037-3.701-5.67-6.828l11.829,4.657    c0.832,1.205,1.291,2.037,1.31,2.065l15.138,33.803l3.366-4.79c2.305-3.252,2.735-7.756,1.214-11.619l43.442-20.243    c4.82-2.543,9.955-8.587,11.676-13.712l28.429-76.672c3.672-9.897,0.488-20.196-7.124-22.988    c-7.603-2.802-16.792,2.945-20.521,12.823l-26.297,69.672c-1.396,4.398-6.426,8.75-11.13,9.553l-39.551,12.278l-18.771-10.643    C105.775,249.473,97.886,250.324,93.641,257.84z"/>
                            </g>
                        </g>
</svg>
                    </div>
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="800px" width="800px" version="1.2" baseProfile="tiny" id="Layer_1" viewBox="0 0 256 256" xml:space="preserve">
                        <g id="XMLID_2_">
                            <path id="XMLID_6_" d="M100,38.1c9.6,0,17.4-7.8,17.4-17.4c0-9.6-7.8-17.4-17.4-17.4c-9.6,0-17.4,7.8-17.4,17.4   C82.7,30.3,90.4,38.1,100,38.1z"/>
                            <path id="XMLID_3_" d="M229.3,88.2l-18.4-3.5L200.1,106c1.7,0.4,3.5,0.6,5.4,0.6C217,106.6,226.6,98.8,229.3,88.2z M2.8,124.2   c0-14.1,11.4-25.6,25.6-25.6h54V59.9c0-9.6,7.8-17.4,17.4-17.4s17.4,7.8,17.4,17.4v6l25.7,6.6c4.5,1,7.4,5.5,6.3,10   c-1,4.6-5.5,7.4-10.1,6.3l-22-5.2v15H143l70.8-73.2l-2.1,19l34.9,23.2c5.7,3.3,7.8,10.7,4.5,16.5c-2.6,4.6-7.7,6.8-12.6,5.9   l-2.8-0.5c-3.4,13.6-15.6,23.6-30.2,23.6c-2.9,0-5.7-0.4-8.3-1.1l-26.4,54v74c0,6.3-5.2,11.5-11.6,11.5c-6.3,0-11.5-5.2-11.5-11.5   v-75.7H89.5L79.1,182l21.8,52c3.2,5.6,1.2,12.6-4.3,15.7c-5.6,3.2-12.6,1.2-15.8-4.3l-25.5-60v-19.1L44,184.2v55.7   c0,6.3-5.1,11.5-11.5,11.5c-6.3,0-11.6-5.2-11.6-11.5v-64.3l9.5-14.9v-50.5L21,124.7v42H2.8V124.2z"/>
                        </g>
                        </svg>
                    </div>
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px" viewBox="0 0 50 50" version="1.2" baseProfile="tiny" overflow="inherit"><path d="M41.446 30.82c-.997 0-1.949.238-2.793.648-.834.375-1.753.602-2.718.602-.962 0-1.882-.227-2.715-.602-.845-.41-1.797-.648-2.793-.648-.986 0-1.939.238-2.794.648-.823.375-1.741.602-2.705.602-.965 0-1.896-.227-2.72-.602-.844-.41-1.796-.648-2.794-.648-.996 0-1.948.238-2.792.648-.833.375-1.752.602-2.711.602-.964 0-1.884-.227-2.717-.602-.843-.41-1.785-.648-2.781-.648-.998 0-1.902.238-2.747.648-.831.376-1.666.602-2.666.602v4.212c1 0 1.835-.229 2.668-.603.844-.409 1.773-.647 2.771-.647.996 0 1.926.238 2.769.647.702.318 1.473.498 2.273.557l-3.376 3.483c-1.074-.691-2.5-.567-3.431.399l-3.867 4.006c-1.074 1.113-1.075 2.916 0 4.04 1.084 1.113 2.826 1.113 3.898 0l3.868-4.005c.877-.911 1.029-2.271.481-3.35l4.65-4.812c.318-.104.624-.182.92-.318.844-.409 1.797-.647 2.792-.647.998 0 1.95.238 2.794.647.824.374 1.755.603 2.72.603.964 0 1.881-.229 2.705-.603.854-.409 1.808-.647 2.794-.647.996 0 1.948.238 2.793.647.833.374 1.753.603 2.715.603.965 0 1.884-.229 2.718-.603.844-.409 1.796-.647 2.793-.647.995 0 1.961.238 2.815.647.82.375 1.737.603 2.737.603v-4.212c-1 0-1.917-.227-2.738-.602-.855-.409-1.821-.648-2.816-.648zm1.873-20.596l3.867-4.007c1.084-1.123 1.084-2.929 0-4.042-1.074-1.123-2.827-1.123-3.9 0l-3.866 4.007c-.932.965-1.051 2.441-.372 3.542l-4.809 4.99-9.552-3.667c-.251-.148-.515-.272-.81-.364-2.084-.646-4.286.579-4.911 2.737l-2.935 10.225-.059.355h-12.972v5.407c1 0 1.403-.171 2.05-.465 1.062-.511 2.224-.784 3.386-.784 1.16 0 2.322.273 3.363.774.689.317 1.396.475 2.119.475.729 0 1.437-.157 2.095-.465 1.073-.511 2.245-.784 3.404-.784 1.173 0 2.322.261 3.387.774.668.317 1.402.475 2.125.475.724 0 1.433-.157 2.101-.465 1.063-.511 2.246-.784 3.397-.784 1.182 0 2.322.261 3.383.774.68.317 1.415.475 2.125.475.725 0 1.447-.157 2.104-.465 1.063-.511 2.246-.784 3.407-.784.195 0 .995.063 1.786-.481 1.401-.635 1.928-.998 3.153-1.776 1.01-.641 1.808-1.901-.385-1.901h-19l5.869-5.802.745.294c.942.352 1.993-.147 2.344-1.124.241-.691.056-1.441-.405-1.94l4.535-4.717c1.04.569 2.353.42 3.231-.487zm-17.986 13.776h-1.171l2.365-8.199 4.886 1.889-6.08 6.31zm-.032-18.087l-.504 1.016c-.329.691-1.007 1.071-1.786 1.071h-1.185c.681 1 1.989 1.632 3.248 1.632 2.059 0 3.926-1.741 3.926-3.876v.244h-3.523l-.176-.087zm-2.29 1.087c.406 0 .768-.253.932-.615l.493-.897c.186-.421.58-.488 1.041-.488h3.854c-.505-2-2.311-3.782-4.446-3.782-2.533 0-4.582 2.018-4.582 4.65 0 .42.044 1.132.154 1.132h2.554z"/></svg>
                    </div>
                    <div class="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px" viewBox="0 0 50 50" version="1.2" baseProfile="tiny" overflow="inherit"><path d="M28.854 28.732c1.297.439 2.707-.22 3.16-1.487.451-1.264-.237-2.638-1.535-3.078-1.299-.44-2.709.231-3.16 1.495-.441 1.259.237 2.643 1.535 3.07zm20.348-15.755s-8.396-.984-25.833-.984c-12.862 0-23.369.984-23.369.984s4.357 1.869 3.601 7.663c0 0 6.252-.726 8.871 4.49l11.743-3.469-.768 7.632-4.967 1.187c-.44.099-.812.308-1.116.571l-10.897 10.247c-.643.593-.654 1.594-.033 2.208.609.628 1.636.65 2.268.056l8.199-7.694 10.045-2.396-.068.021 1.67-.418 1.535 1.705c.237.252.575.406.937.406l5.406.021c.678 0 1.241-.538 1.241-1.209 0-.583-.417-1.033-.97-1.166l-4.029-13.661 16.782-4.952c.802-.342.734-1.138-.248-1.242zm-13.712 19.8c-1.23 0-3.285-.011-3.905-.011l-2.913-3.21-.124-.088c-.587-.67-1.523-1.021-2.459-.803l-1.457.353.779-7.709 6.15-1.813 3.929 13.281z"/></svg>
                    </div>
                </div>
                <div id="discover-more-button">
                    <button><a href="#">Discover More</a> </button>
                </div>

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