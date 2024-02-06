<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <style>
        #slideshow {
            overflow: hidden;
        }

        #slider {
            display: flex;
            transition: transform 1s ease-in-out;
        }

        .slide {
            flex: 0 0 100%; /* Each slide takes 100% width */
        }

        .slide img {
            width: 50%;
            height: auto;
        }
    </style>
</head>
<body>

<div id="slideshow">
    <div id="slider">
        <div class="slide"><img src="pictures/albania.jpeg" alt="Slide 1"></div>
        <div class="slide"><img src="pictures/ksamil.jpg" alt="Slide 2"></div>
        <div class="slide"><img src="pictures/1st.jpg" alt="Slide 3"></div>
        <div class="slide"><img src="pictures/skiing.jpeg" alt="Slide 4"></div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var slider = document.getElementById("slider");
        var slides = document.querySelectorAll(".slide");
        var i = 0;
        var totalSlides = slides.length;
        var intervalId;

        function nextSlide() {
            if (i < totalSlides - 1) {
                i++;
            } else {
                i = 0;
            }
            updateSlider();
        }

        function updateSlider() {
            var newPosition = -i * 100 + "%";
            slider.style.transform = "translateX(" + newPosition + ")";
        }

        function startSlider() {
            intervalId = setInterval(nextSlide, 2000); // milliseconds
        }

        function stopSlider() {
            clearInterval(intervalId);
        }

        // Preload images
        slides.forEach(function (slide) {
            var img = new Image();
            img.src = slide.querySelector('img').src;
        });

        // Start the slider when the page loads
        startSlider();

        // Pause slideshow on mouseover
        slider.addEventListener("mouseover", stopSlider);

        // Resume slideshow on mouseout
        slider.addEventListener("mouseout", startSlider);
    });

    document.addEventListener('DOMContentLoaded', function () {
        var navIcon = document.querySelector('.navicon');
        var nav = document.querySelector('.nav');
        navIcon.addEventListener('click', function () {
            nav.classList.toggle('responsive');
        });
    });
</script>

</body>
</html>
