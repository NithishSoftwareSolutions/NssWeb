<?php
include_once 'include/loader.php';
include_once 'include/header.php';
include_once 'config.php';
error_reporting(0);
?>


<style>

    .iott {
        font-family: 'Nunito'
    }

    .download {
        font-family: 'Bitter'

    }

    .WeGot1 {
        font-family: 'Bitter';
        color: #0A4C89;

    }

    .carousel-control-next {

        display: none !important;
    }


    .custom-section {

        display: none;
    }

    svg {
        width: 100%;
        height: auto;
    }

    text {
        font-size: 48px;
        fill: white;
        font-family: Arial, sans-serif;
        text-anchor: middle;
        dominant-baseline: middle;
    }

    svg text {
        font-family: 'Nunito', sans-serif;
    }


    @media (max-width: 426px) {



        #shap {

            display: none !important;
        }

        .custom-section {

            display: block;
            padding: 14% !important;
        }


    }
    @keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px); /* Adjust for upward motion */
    }
    100% {
        opacity: 1;
        transform: translateY(10px);
    }
}

.fade-in-up {
    animation: fadeInUp 5s ease-out forwards;
}



</style>


<section id="shap" class="shap">
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 762" preserveAspectRatio="none">
        <defs>
            <linearGradient id="gradient" x1="100%" y1="70%" x2="0%" y2="0%">
                <stop offset="20%" style="stop-color:#0A4C89" />
                <stop offset="80%" style="stop-color:#031323" />
            </linearGradient>
            
        </defs>
        <g transform="translate(0.000000,550.000000) scale(0.0999999,-0.1089999)" stroke="none">
            <path d="M0 4578 l0 -2842 138 -136 c315 -312 648 -551 1077 -776 613 -320 1376 -544 2140 -628 287 -32 449 -40 780 -40 635 0 1163 66 1750 218 456 119 803 249 1305 491 269 130 338 158 540 223 270 87 561 143 950 184 195 20 904 17 1150 -5 937 -86 1877 -292 2960 -649 504 -166 944 -331 1378 -516 l232 -100 0 3709 0 3709 -7200 0 -7200 0 0 -2842z" fill="url(#gradient)" />
        </g>
        <text x="80%" y="55" font-size="18" text-anchor="middle" textLength="auto" lengthAdjust="spacing">
            <tspan x="68%" dy="1.4em" font-size="18" style="font-family:Nunito;">IOTT, the Vizag-based free Indian OTT app, is thrilled to bring you.</tspan>
            <tspan x="68%" dy="1.4em" font-size="18" style="font-family:Nunito;">a vibrant streaming experience in 13 languages! As the first OTT </tspan>
            <tspan x="68%" dy="1.4em" font-size="18" style="font-family:Nunito;">regional platform from Andhra Pradesh, IOTT proudly offers Pan-</tspan>
            <tspan x="68%" dy="1.4em" font-size="18"style="font-family:Nunito;">India, regional, and relatable content, including movies, web series</tspan>
            <tspan x="68%" dy="1.4em" font-size="18"style="font-family:Nunito;">short films, interviews, and talk shows. With a mission to connect</tspan>
            <tspan x="68%" dy="1.4em" font-size="18"style="font-family:Nunito;">every village, we provide the best industry content in Telugu</tspan>
            <tspan x="68%" dy="1.4em" font-size="18"style="font-family:Nunito;">Tamil, Hindi, English, Malayalam, Kannada, Punjabi, Gujarati, </tspan>
            <tspan x="68%" dy="1.4em" font-size="18"style="font-family:Nunito;">Bengali, Odia, Assamese, Bhojpuri, and Marathi. Explore rich, </tspan>
            <tspan x="68%" dy="1.4em" font-size="18"style="font-family:Nunito;">diverse entertainment at a fair price and join us in celebrating  </tspan>
            <tspan x="68%" dy="1.4em" font-size="18"style="font-family:Nunito;">IOTT, a truly made-in-India app.</tspan>
        </text>
        <image width="720" height="500" href="assets/img/phone.png" class="jump-animation"/>
    </svg>
</section>
<style>
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
        }

        @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
        }

        .custom-section {
        background: linear-gradient(180deg, #0A4C89, #031323);
        color: white;
        padding: 50px 0;
        border-bottom-left-radius: 150px;
        border-bottom-right-radius: 150px;
        padding-bottom: 33%;
        }

        .custom-section img {
        max-width: 93%;
        animation: fadeInLeft 1.5s ease-in-out;
        }

        .itto2 {
        animation: fadeInRight 1.5s ease-in-out;
        }

</style>

<div class="container-fluid mt-5 custom-section">
    <div class="row">
        <div class="col-md-6 text-center">
            <img src="assets/img/phone.png" class="jump-animation" alt="IOTT App">
        </div>
        <div class="col-md-6 itto2">
            <!-- <h2 style="text-align: center;font-family: bitter;">IOTT</h2>   -->

            <p class="text-justify iott">IOTT, Vizag's free
                Indian OTT app, offers vibrant streaming in 13 languages. As Andhra Pradesh's first OTT platform,
                enjoy movies, series, interviews, and more. Connect with diverse content in multiple languages.
                Celebrate IOTT, a truly made-in-India app.
            </p>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Select all tspan elements within the text element
    const tspans = document.querySelectorAll('text tspan');

    // Initialize IntersectionObserver
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');  // Add a class to trigger animation
            } else {
                entry.target.classList.remove('fade-in-up');  // Remove the class to reset the animation
            }
        });
    }, {
        threshold: 0.5  // Adjust the threshold as needed (percentage of element in view)
    });

    // Observe each tspan element
    tspans.forEach(tspan => {
        observer.observe(tspan);
    });
});
</script>


<style>
    .card {

        color: white;
        border: none;
        border-radius: 15px;
        background: linear-gradient(360deg, #D3B463 20%, #0A4C89 80%);


    }

    .card-text {
        color: white;
    }

    .icon {
        font-size: 24px;
        margin-bottom: 10px;
    }

    #card-body {

        padding: 8% !important;
        background-color: rgba(0, 0, 0, 0.25);

    }



    /* Define keyframes for the animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
            /* Slide up from bottom */
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }  
    
    }
    .card {
    opacity: 0;
    transition: opacity 0.5s ease-out, transform 0.5s ease-out;
    transform: translateY(20px); /* Adjust for upward motion */
}

.card.animate {
    opacity: 1;
    transform: translateY(0);
}
   

</style>

<div class="container">
        <h2 class="text-center font-weight-bold mb-3  WeGot1">Featured Services</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">


        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center" id="card-body">
                    <h5 class="card-title">Streamline</h5>
                    <p class="card-text">📺 Enjoy streaming with IOTT at lower prices. Just download, sign up, and start watching! 🌟</p>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center"id="card-body">
                    <h5 class="card-title">Video Player</h5>
                    <p class="card-text">Enjoy our easy-to-use video player on any Android or iOS device! 🌟</p>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center" id="card-body">
                    <h5 class="card-title">Search & Filter</h5>
                    <p class="card-text">Easily find what you need with our smart search filters! 🌟</p>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center" id="card-body">
                    <h5 class="card-title">Wallet</h5>
                    <p class="card-text">💼 Watch premium content easily using the wallet option! 🌟</p>
                </div>
            </div>
        </div>


        
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center" id="card-body">
                    <h5 class="card-title">Secure Payment</h5>
                    <p class="card-text">💳Choose your preferred payment mode and check out with a card or secure!🌟</p>
                </div>
            </div>
        </div>

            
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center" id="card-body">
                    <h5 class="card-title">Refer and Earn</h5>
                    <p class="card-text">🎁 Invite a friend to IOTT and earn a scratch card! 🌟</p>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center" id="card-body">
                    <h5 class="card-title">Easy Sign Up</h5>
                    <p class="card-text">✨ Use your mobile number, social media, or log in as a guest with OTP verification! 🌟</p>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center"id="card-body">
                    <h5 class="card-title">Account Management</h5>
                    <p class="card-text">🔧 Manage addresses, view orders, select payment method for a seamless experience.🌟</p>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center"id="card-body">
                    <h5 class="card-title">Review</h5>
                    <p class="card-text">🌟 Share your feedback and reviews to help others make informed decisions about the app! 📝</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    ScrollReveal().reveal('.sr', {
        delay: 200,  // Delay in milliseconds
        distance: '20px',  // Animation distance
        origin: 'bottom',  // Animation origin (top, bottom, left, right)
        easing: 'ease-out',  // Easing function
        interval: 200  // Interval between elements (if staggered)
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Select all elements with the class 'card'
    const cards = document.querySelectorAll('.card');

    // Initialize IntersectionObserver
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');  // Add a class to trigger animation
            } else {
                entry.target.classList.remove('animate');  // Remove the class to reset the animation
            }
        });
    }, {
        threshold: 0.5  // Adjust the threshold as needed (percentage of element in view)
    });

    // Observe each card element
    cards.forEach(card => {
        observer.observe(card);
    });
});

</script>


<style>

    /* Define keyframes for the fade-in animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
            /* Optional: Slide up effect */
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Apply the animation to the images */
    .iott-app-image {
        animation: fadeIn 0.5s ease-out;
    }

    /* Add animation to the image */
    .column_2 img {
        opacity: 0;
        /* Start with opacity 0 to fade in */
        animation: fadeInImage 1s forwards;
        /* Animation duration and type */
    }

    @keyframes fadeInImage {
        from {
            opacity: 0;
            transform: translateY(20px);
            /* Optional: Slide up effect */
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .svg-container {
        width: 25%;
    }


</style>

<style>
@keyframes jump {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.jump-animation {
    animation: jump 2s infinite;
}
</style>

 <style>
    .iott-app-image {
        border-radius: 15px;
    }

    .carousel-item {
        padding: 15px;
    }

    .iott-app-image2,
    .iott-app-image3,
    .iott-app-image4,
    .iott-app-image5,
    .iott-app-image6 {
        text-align: center;
    }

 </style>


<section id="sectiona">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center font-weight-bold WeGot1">IOTT Entertainment App</h2>
                <p class="text-center font-weight-bold WeGot1 mb-5">Entertainment In Your Hands</p>
                <!-- <h3 class="text-center restaurant_app itto_f"><b class="itto_f">IOTT Entertainment App</b></h3> -->
                <!-- <h3 class="text-center mb-4 itto_p">Entertainment In Your Hands</h3> -->
                <div id="iottCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-6 col-sm-4 col-md-4 iott-app-image2 mb-3">
                                    <img src="assets/img/M5.jpg" class="iott-app-image img-fluid" alt="Home Screen">
                                </div>
                                <div class="col-6 col-sm-4 col-md-4 iott-app-image3 mb-3">
                                    <img src="assets/img/M6.jpg" class="iott-app-image img-fluid" alt="Space Black Screen">
                                </div>
                                <div class="col-6 col-sm-4 col-md-4 iott-app-image4 mb-3">
                                    <img src="assets/img/M4.jpg" class="iott-app-image img-fluid" alt="Referral Screen">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-6 col-sm-4 col-md-4 iott-app-image5 mb-3">
                                    <img src="assets/img/M1.jpg" class="iott-app-image img-fluid" alt="Image 4 Screen">
                                </div>
                                <div class="col-6 col-sm-4 col-md-4 iott-app-image6 mb-3">
                                    <img src="assets/img/M2.jpg" class="iott-app-image img-fluid" alt="Image 5 Screen">
                                </div>
                                <div class="col-6 col-sm-4 col-md-4 iott-app-image6 mb-3">
                                    <img src="assets/img/M5.jpg" class="iott-app-image img-fluid" alt="Image 5 Screen">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#iottCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#iottCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Select all elements with the class 'iott-app-image'
    const images = document.querySelectorAll('.iott-app-image');

    // Initialize IntersectionObserver
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate'); // Add a class to trigger animation
            }
        });
    }, {
        threshold: 0.5 // Adjust the threshold as needed (percentage of element in view)
    });

    // Observe each image element
    images.forEach(image => {
        observer.observe(image);
    });

</script>

 
<style>
    /* Additional custom styles as needed */
    .scroll-container {
        overflow-x: hidden;
    }
    .scroll-wrapper {
        white-space: nowrap;
        animation: scroll 20s linear infinite;
    }
    .scroll-item {
        display: inline-block;
        padding: 0 20px; /* Adjust padding as needed */
        align-content: center;
        
    }
    @keyframes scroll {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-100%); }
    }
    #scrol123{
        background-color: #0A4C89;

    }
</style>


<section id="section13 mt-4">
    <div class="container-fuild">
        <h2 class="text-center font-weight-bold  WeGot1">We Got Everything that</h2>
        <h2 class="text-center font-weight-bold  WeGot1 mb-5">Your App Needs!</h2>
        <div class="scroll-container " id="scrol123">
            <div class="scroll-wrapper">
                <div class="scroll-item p-5 "style="color: #ffffff;">
                    <h5 class="d-flex align-items-center"><i class="fa-solid fa-mobile-screen fa-2x" style="color: #ffffff;"></i>&nbsp;Advanced UI/UX </h5>
                </div>
                <div class="scroll-item p-5"style="color: #ffffff;">
                    <h5 class="d-flex align-items-center"><i class="fa-solid fa-lock fa-2x" style="color: #ffffff;"></i>&nbsp;Security</h5>
                </div>
                <div class="scroll-item p-5" style="color: #ffffff;">
                    <h5 class="d-flex align-items-center"><i class="fa-solid fa-gear fa-2x" style="color: #ffffff;"></i>&nbsp;Competitive Rate</h5>
                </div>
                <div class="scroll-item p-5" style="color: #ffffff;">
                    <h5 class="d-flex align-items-center"><i class="fa-solid fa-gear fa-2x" style="color: #ffffff;"></i>&nbsp;Maintenance</h5>
                </div>
                <div class="scroll-item p-5"style="color: #ffffff;">
                    <h5 class="d-flex align-items-center"><i class="fa-regular fa-bell fa-2x" style="color: #ffffff;"></i>&nbsp;Push Notification</h5>
                </div>
                <div class="scroll-item p-5" style="color: #ffffff;">
                    <h5 class="d-flex align-items-center"><i class="fa-solid fa-ticket fa-2x" style="color: #ffffff;"></i>&nbsp;Daily Deals & Coupons</h5>
                </div>
                <div class="scroll-item p-5" style="color: #ffffff;">
                    <h5 class="d-flex align-items-center"><i class="fa-solid fa-hands-holding-child fa-2x" style="color: #ffffff;"></i>&nbsp;Constant Technical Assistance</h5>
                </div>
                <div class="scroll-item p-5" style="color: #ffffff;">
                    <h5 class="d-flex align-items-center"><i class="fa-solid fa-clock fa-2x" style="color: #ffffff;"></i>&nbsp;Less Downtime</h5>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Script for auto-scrolling -->
<script>
    $(document).ready(function() {
        // Adjust scroll speed and direction here
        $('.scroll-wrapper').css('animation-duration', '20s'); // Change duration as needed
    });
</script>

</section>

<section id="section10" >
    <div class="container-fluid d-flex justify-content-center align-items-center">

        <div class="row mt-5 w-100">
            <div class="col-md-6 mx-auto" >
                <h2 class="text-center font-weight-bold mb-3 download ">Download Our App</h2>
                <p class="font-weight-bold text-justify iott">
                    IOTT offers free streaming services to our way of entertainment. You can watch movies online for free. Rooted to regional films in all languages, short films & web series from new age filmmakers and unexpected exciting content shows and that everything are for free. As originated from Telugu, we offer more streaming content shows, free Pan-Indian movie streaming and we are already into “IOTT Originals” – a passionate attempt to the world of cinema, coming soon.</p>
                <div class="text-center">
                <a href="https://play.google.com/store/apps/details?id=iott.co.in" target="_blank">
                    <button type="button" class="btn btn-primary jump-animation" id="">GET THE APP</button></a>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    // Select the image element
    const image = document.querySelector('.column_2 img');

    // Initialize IntersectionObserver
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate'); // Add a class to trigger animation
            }
        });
    }, {
        threshold: 0.5 // Adjust the threshold as needed (percentage of element in view)
    });

    // Observe the image element
    observer.observe(image);
</script>


<?php
include_once 'include/footer.php';
?>