<?php
include_once 'include/loader.php';
include_once 'include/header.php';
include_once 'config.php';
error_reporting(0);
?>



<style>
  @keyframes scrollAnimation {
  from {
    opacity: 0;
    transform: translateY(20px); /* Start hidden and slightly below */
  }
  to {
    opacity: 1;
    transform: translateY(0); /* End visible at original position */
  }
}
* {
  font-family: 'Nunito', sans-serif;
}
/* Apply initial styles to the brand logos */
.brand-logo {
  opacity: 0; /* Start with opacity 0 */
  animation: scrollAnimation 0.6s ease-in-out forwards; /* Apply animation */
  animation-delay: 0s; /* Delay the animation for staggered effect */
  height:50%;
}
.tech_cards{
  font-size: x-large;
  font-weight: 800;
}
.column-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  height: 100%;
  position: relative; /* Required for absolute positioning of pseudo-elements */
}

.horizontal-line-container {
  position: absolute;
  width: 50%;
  height: 1px; /* Line thickness */
  background-color: #fff; /* Line color */
  top: 35%; /* Position line in the middle of the container */
  left: 0;
  transform: translateY(-50%); /* Center line vertically */
  z-index: 1; /* Ensure the line appears behind the content */
  margin-left:98%;
}
@media (max-width: 768px) { /* Adjust the max-width value as needed */
  .horizontal-line-container {
    display: none;
  }
}


.image-zoom {
  max-width: 100%;
  height: auto;
}

figcaption {
  margin-top: 10px;
}

.row {
  display: flex;
  flex-wrap: wrap;
}

.col-12, .col-md-4, .col-lg-2 {
  display: flex;
  justify-content: center;
  position: relative; /* Required for relative positioning of .horizontal-line-container */
}
/* .why{
  font-family:'Bitter';
  
} */

/* .google_iframe iframe {
    width: 300px !important;
    height: 300px !important;
    border: 0;
    
} */

/* .carousel2{
  border:2px solid grey;
  border-radius:20px;
} */
.carousel2 {
  border: 2px solid grey;
  border-radius: 20px;
  position: relative;
  padding: 20px;
}

.carousel-slide-content {
  display: flex;
  flex-direction: row;
  align-items: center;
  text-align: left;
}

.carousel-slide-content img {
  width: 100%;
  max-width: 500px;
  margin-right: 20px;
}

.carousel-slide-content p {
  margin: 0;
}

.carousel-controls {
  display: flex;
  justify-content: center;
  margin-top: 10px;
}

.carousel-controls a {
  margin: 0 10px;
}

@media (max-width: 767px) {
  .carousel2 {
    padding: 20px 10px;
  }
  .carousel-slide-content {
    flex-direction: column;
    text-align: center;
  }
  .carousel-slide-content img {
    margin: 0 0 20px 0;
  }
  .carousel-controls {
    flex-direction: column;
  }
  .carousel-controls a {
    margin: 10px 0;
  }
}
.tech{
 background-color:#0A4C898C;
}
.tech_heading{
  color:white;

}
.brands_text{
  color:black;

}
#featuredservices{
  border-top:#FFD700B2;
}
.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}
.carousel_text{
  font-family: 'Nunito';
  text-align:justify;
  padding:6%;
  color:#797979;
}

.svg-container {
      position: relative;
      width: 100%;
    }
    .svg-container svg {
      width: 100%;
      height: auto;
    }
    .centered-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 40px;
      font-weight: bold;
      text-align: center;
      /* font-family:'Bitter'; */
    }
    @media (max-width: 768px) {
      .centered-text {
        font-size: 1.5rem;
      }
    }
    @media (max-width: 576px) {
      .centered-text {
        font-size: 1rem;
      }
    }

    .wearehiring{
      background-color:#789DBE4A;
    }
    .join{
      font-family:'Nunito';
      font-weight:700;
    }
  #help_section{
    background-color: #D9D9D94D;
  }
  .btn_text{
    /* font-family: 'Bitter'; */
  }
  .iframe-container {
  position: relative;
  width: 75%;
  padding-top: 75%; /* Aspect Ratio 1:1 (350x350) */
  overflow: hidden;
  background: #000;
  /* Optional: Center iframe vertically within container */
  display: flex;
  align-items: center;
  justify-content: center;
}

.iframe-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.btn_1 {
  background-color: #0A4C89; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  /* font-family:'Bitter'; */
}
.heading_2{
  /* font-family:'Bitter'; */
}


</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
  integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="links" id="social-links">



</div>



<section>
  <div class="container-fluid section_123">
    <div class="row" style="width: 100%;" id="section_12">
      <div class="col topmai">
        <img src="assets/img/he.png" alt="" class="topmai2">
        <div class="text-overlay " id="text-overlay123">
          <h1 class="lets">Let's elevate your <br>digital presence.</h1>
          <p class="elev">
          Understand future-ready development to ROI-focused marketing and economical maintenance, we offer acomplete package. Our expert team of web designers, app developers, and marketers is dedicated to helping emerging businesses worldwide gain a competitive edge, generate valuable leads, and foster sustainable growth. Trust us to provide you with the tools and strategies needed to thrive in today's digital landscape.
          </p>
          <div class="col iconhome">
            <i class="fa-solid fa-thumbs-up solid_1" style="color: #ffffff;"><br>
              <h6 class="solid_2">120+</h6>
              <h6 class="solid_3">Happy clients</h6>
            </i>
            <i class="fa-solid fa-user-group solid_1" style="color: #ffffff;"><br>
              <h6 class="solid_2">50+</h6>
              <h6 class="solid_3">Experts</h6>
            </i>
            <i class="fa-solid fa-handshake solid_1" style="color: #ffffff;"><br>
              <h6 class="solid_2">20+</h6>
              <h6 class="solid_3">Years of Trust</h6>
            </i>
            <img src="assets/img/image 31.png" alt="" class="solid_1">

            
            
          </div>
         
          <img src="assets/img/tr.png" alt="" class="triangle">
        </div>
      </div>
    </div>
  </div>
</section>



<section>
  <div class="container-fluid section_img12">
    <div class="row">
      <div class="col " style="padding: 0%;">
        <img src="assets/img/71.png" alt="" class="topmai234" id="topmai234">
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="lets1" id="lets">Let's elevate your <br>digital presence.</h1>
        <p class="elev1" id="elev">
          Elevate your business with our comprehensive web solutions.From strategic design and future-ready development
          to ROI-focused marketing and economical maintenance, we offer acomplete package. Our expert team of web
          designers, appdevelopers, and marketers is dedicated to helping emergingbusinesses worldwide gain a
          competitive edge, generatevaluable leads, and foster sustainable growth. Trust us toprovide you with the tools
          and strategies needed to thrive intoday's digital landscape
        </p>
      </div>
    </div>
  </div>
</section>


<div class="container p-5">
  <div class="col">
    <div class="row"></div>
  </div>
</div>

<div class="container">
  <h3 class="brands_text text-center font-weight-bold mb-4">
    Top brands we work for
  </h3>

  <div class="row justify-content-center align-items-center text-center">

    <div class="col-auto animate__animated" data-animation="animate__zoomIn">
      <a href="https://waymaart.nssorg.com">
        <img src="assets/img/Group 61 (1).png" class="brand-logo img-fluid" alt="Brand 1">
      </a>
    </div>

    <div class="col-auto animate__animated" data-animation="animate__zoomIn">
      <img src="assets/img/Component 24.png" class="brand-logo img-fluid" alt="Brand 2">
    </div>

    <div class="col-auto animate__animated" data-animation="animate__zoomIn">
      <a href="https://play.google.com/store/apps/details?id=zennnews.com&hl=en_IN">
        <img src="assets/img/zennnews.png" class="brand-logo img-fluid" alt="Brand 3">
      </a>
    </div>

    <div class="col-auto animate__animated" data-animation="animate__zoomIn">
      <a href="https://iott.co.in">
        <img src="assets/img/Component 23.png" class="brand-logo img-fluid" alt="Brand 4">
      </a>
    </div>

  </div>
</div>




<section id="featuredservices">
  <div class="text-center">

  <h2 class="heading_2 font-weight-bold mt-5">FEATURED SERVICES</h2>

  </div>
  <h5 class="text-center p-3 P_Our">
            Our cross-functional teams specialize in crafting flawless web solutions, from design to development and
            marketing. We seamlessly blend creativity and technical expertise to deliver impeccable results. Our holistic
            approach ensures a cohesive and effective online presence for our clients.
          </h5>
    <div class="container-fluid container_reach">
      <div class="row m-4 text-center horizo">
        <div class="col-12 col-md-4 col-lg-2 mb-4 animate__animated" data-animation="animate__zoomIn" >
          <div class="column-container">
            <div class="horizontal-line-container"></div>
            <img src="assets/img/research.png" alt="Research" class="image-zoom img-fluid">
            <figcaption class="text-white figcaption-small">
              <h5 class="mt-3">Research</h5>
            </figcaption>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-2 mb-4 animate__animated" data-animation="animate__zoomIn">
          <div class="column-container">
            <div class="horizontal-line-container"></div>
            <img src="assets/img/design-removebg-preview.png" alt="Design" class="image-zoom img-fluid">
            <figcaption class="text-white figcaption-small">
              <h5 class="mt-3">Design</h5>
            </figcaption>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-2 mb-4 animate__animated" data-animation="animate__zoomIn" >
          <div class="column-container">
            <div class="horizontal-line-container"></div>
            <img src="assets/img/developer 3.png" alt="Development" class="image-zoom img-fluid">
            <figcaption class="text-white figcaption-small">
              <h5 class="mt-3">Development</h5>
            </figcaption>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-2 mb-4 animate__animated" data-animation="animate__zoomIn" >
          <div class="column-container">
            <div class="horizontal-line-container"></div>
            <img src="assets/img/testing.png" alt="Testing" class="image-zoom img-fluid">
            <figcaption class="text-white figcaption-small">
              <h5 class="mt-3">Testing</h5>
            </figcaption>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-2 mb-4 animate__animated" data-animation="animate__zoomIn" >
          <div class="column-container">
            <!-- <div class="horizontal-line-container"></div> -->
            <img src="assets/img/marketing.png" alt="Marketing" class="image-zoom img-fluid">
            <figcaption class="text-white figcaption-small">
              <h5 class="mt-3">Marketing</h5>
            </figcaption>
          </div>
        </div>
      </div>
    </div>
</section>

  <section id="card_grid">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
      <div class="col hover_img animate__animated" data-animation="animate__zoomIn">
        <div class=" h-100">
          <div class="image-container">
            <img src="assets/img/28.png" class="card-img-top" alt="Hollywood Sign on The Hill">
            <div class="overlay" id="overlay">
              <ul class="text-warning" id="text-warning">
                <li>Web Design</li>
                <li>Web Application Development</li>
                <li>Wordpress </li>
                <li>Node Js Development</li>
                <li>PHP Development</li>
                <li>Angular Development</li>
                <li>React Development</li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title"><span class="tech_cards">01</span> WEB DEVELOPMENT</h5>
            <p class="card-text ">
              Elevate your online presence with our expert web development services, delivering cutting-edge websites
              tailored to your company's unique needs and goals.
            </p>

          </div>
        </div>
      </div>
      <div class="col hover_img animate__animated" data-animation="animate__zoomIn">
        <div class=" h-100">
          <div class="image-container">
            <img src="assets/img/29.png" class="card-img-top" alt="Palm Springs Road">
            <div class="overlay">
              <ul class="text-warning mt-3 " id="text-warning" style=" font-family: Nunito ">
                <li>Mobile App Development</li>
                <li>Android App Development</li>
                <li>IOS App Development</li>
                <li>React Native Development</li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title "><span class="tech_cards">02</span> MOBILE APP DEVELOPMENT</h5>
            <p class="card-text">
              Our specialization lies in crafting feature-rich, robust, and secure mobile applications tailored for both
              Android and iOS platforms, ensuring a top-tier user experience.
            </p>
          </div>
        </div>
      </div>
      <div class="col hover_img animate__animated" data-animation="animate__zoomIn">
        <div class=" h-100">
          <div class="image-container">
            <img src="assets/img/uiuxdESIGNS.png" class="card-img-top" alt="Los Angeles Skyscrapers">
            <div class="overlay">
              <ul class="text-warning mt-3 " id="text-warning">
                <li>UI/UX Designs</li>
                <li>Research</li>
                <li>Wire Frames</li>
                <li>Prototype</li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title"><span class="tech_cards">03</span> UI/UX DESIGNS</h5>
            <p class="card-text ">Revamp your company's user experience with our expert UX design services, creating
              intuitive and engaging interfaces that captivate your audience and drive success.</p>
          </div>
        </div>
      </div>
      <div class="col hover_img animate__animated" data-animation="animate__zoomIn">
        <div class=" h-100">
          <div class="image-container">
            <img src="assets/img/30.png" class="card-img-top" alt="Skyscrapers">
            <div class="overlay">
              <ul class="text-warning mt-3 " id="text-warning">
                <li>eCommerce Web Site</li>
                <li>ecommerce App</li>
                <li>Shopify Development</li>
                <li>Wordpress Development</li>
              </ul>
            </div>
          </div>
          <div class="card-body" id="text-warning">
            <h5 class="card-title"><span class="tech_cards">04</span> E-COMMERCE DEVELOPMENT</h5>
            <p class="card-text ">Deliver user-friendly and secure single-vendor storefronts or multi-vendor
              marketplaces, ensuring a seamless shopping experience for your customers and robust business management
              capabilities.
            </p>
          </div>
        </div>
      </div>
      <div class="col hover_img animate__animated" data-animation="animate__zoomIn">
        <div class=" h-100">
          <div class="image-container">
            <img src="assets/img/25.png" class="card-img-top" alt="Skyscrapers">
            <div class="overlay">
              <ul class="text-warning mt-3 " id="text-warning">
                <li>Logo Design</li>
                <li>Corporate Identity</li>
                <li>Brochure Design</li>
                <li>Content Writing</li>
                <li>Explainer Video</li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title "><span class="tech_cards">05</span> DESIGN & BRANDING</h5>
            <p class="card-text ">
              Elevate your company's visual identity and brand recognition with our comprehensive branding and design
              services, tailored to captivate your target audience and leave a lasting impression.
            </p>
          </div>
        </div>
      </div>
      <div class="col hover_img animate__animated" data-animation="animate__zoomIn">
        <div class=" h-100">
          <div class="image-container">
            <img src="assets/img/27.png" class="card-img-top" alt="Skyscrapers">
            <div class="overlay">
              <ul class="text-warning mt-3 " id="text-warning">
                <li>Digital Marketing Services</li>
                <li>PPC Management</li>
                <li>SEO Management</li>
                <li>Social media Marketing</li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title"><span class="tech_cards">06</span> DIGITAL MARKETING</h5>
            <p class="card-text ">
              Elevate your brand's online presence with our expert digital marketing services, tailored to drive results
              and ROI for your company.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </section>

  <section class="tech">
    <div class="container-fluid p-3 mb-5">

      <div class="row">

        <div class="col">

          <div class="row">
            <div class="col-md-4 d-flex justify-content-center align-items-center">

            <h2 class="text-center tech_heading">Technologies<br> We Work With</h2>


            </div>
            <div class="col-md-8 mt-5">

              <div id="slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="1000">
                <ol class="carousel-indicators d-none">
                  <li data-target="#slider" data-slide-to="0" class="active"></li>
                  <li data-target="#slider" data-slide-to="1"></li>
                  <li data-target="#slider" data-slide-to="2"></li>
                  <li data-target="#slider" data-slide-to="3"></li>
                  <li data-target="#slider" data-slide-to="4"></li>
                </ol>

                <div class="carousel-inner mb-5">
                  <div class="carousel-item active bandicone_1" style=" display: flex; justify-content: center;">
                    <img class="d-block img-fluid" src="assets/img/Frame 28.png">
                  </div>
                  <!-- <div class="carousel-item bandicone_2 " style=" display: flex; justify-content: center; ">
                    <img class="d-block img-fluid" src="assets/img/Frame 28.png">
                  </div> -->
                  <div class="carousel-item bandicone_3" style=" display: flex; justify-content: center;">
                    <img class="d-block img-fluid" src="assets/img/second.png">
                  </div>
                  <div class="carousel-item bandicone_4" style=" display: flex; justify-content: center;">
                    <img class="d-block img-fluid" src="assets/img/third.png">
                  </div>
                </div>
              </div>
              



            </div>
          </div>
        </div>
  </section>
<div class="wearehiring">
  <div class="svg-container  animate__animated" data-animation="animate__zoomIn">
  <svg width="1440" height="193" viewBox="0 0 1440 193" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M-25.5 0H1447V83.8261L439 192.5L-25.5 83.8261V0Z" fill="#0A4C89"/>
  </svg>
  <div class="centered-text text-center">
    We are Hiring!
  </div>
</div>
<div class="container p-5">
  <div class="row">
    <div class="col-md-6 animate__animated" data-animation="animate__zoomIn">
    <img src="assets/img/33.png" alt="Slide 1" class="img-fluid">


    </div>
    <div class="col-md-6 animate__animated" data-animation="animate__zoomIn">
      <h4 class="join">Join our team and be part of something<br> great! Explore exciting career opportunities<br> with us today.</h4>
      <div class="row">
        <div class="col-md-6 mt-3 animate__animated" data-animation="animate__zoomIn">
        <ul>
            <li><h5 class="join">Web Developer</h5></li>
            <li><h5 class="join">React Developer</h5></li>
            <li><h5 class="join">IOS Developer</h5></li>
            <li><h5 class="join">App Developer</h5></li>
            <li><h5 class="join">Testing</h5></li>
          </ul>

        </div>
        <div class="col-md-6 mt-3 animate__animated" data-animation="animate__zoomIn">
        <ul>
          <li ><h5 class="join">PHP Developer</h5></li>
          <li ><h5 class="join">UI UX Designer</h5></li>
          <li ><h5 class="join">Angular Developer</h5></li>
          <li ><h5 class="join">Digital Marketer</h5></li>
          <li ><h5 class="join">Video Editing</h5></li>

        </ul>
          
        </div>
      </div>

    </div>

  </div>
</div>
  </div>


  <!-- <section>
    <div class="container " id="show_casing3">
      <div class="row">
        <div class="col-12">
          <h3 class="show12">SHOWCASING OUR EXPERTISE<br>WEBSITE & MOBILE APP</h3>
        </div>
      </div>
      <div class="row align-items-center game_chan_2">
        <div class="col-md-6 text-center game_chan">
          <img src="assets/img/35.png" alt="Nithish Software Solution" class="img-fluid" id="Inagame">
        </div>
        <div class="col-md-6">
          <p class="mb-4 game">
            In a game-changing partnership, Nithish Software Solutions elevated our client's OTT platform to new
            heights, setting the gold standard for user experience. By adhering to best practices in user-centric
            design, content delivery, personalization, security, and accessibility, we crafted an unmatched viewing
            experience. Our client reaped the rewards, achieving higher user engagement and satisfaction. This success
            underscores our commitment to delivering cutting-edge OTT solutions that redefine industry standards.
          </p>
        </div>
      </div>
    </div>
  </section> -->
  <h3 class="text-center p-3 mt-4 mx-4 carousel_heading font-weight-bold">SHOWCASING OUR EXPERTISE<br>WEBSITE & MOBILE APP</h3>

<div class="carousel-container">
  <div class="container carousel2 p-5 mt-4">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-slide-content">
            <img src="assets/img/slide1.png" alt="Slide 1" class="img-fluid">
            <h6 class="carousel_text">In a game-changing partnership, Nithish Software Solutions elevated our client's OTT platform to new heights, setting the gold standard for user experience. By adhering to best practices in user-centric design, content delivery, personalization, security, and accessibility, we crafted an unmatched viewing experience. Our client reaped the rewards, achieving higher user engagement and satisfaction. This success underscores our commitment to delivering cutting-edge OTT solutions that redefine industry standards.</h6>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-slide-content">
            <img src="assets/img/slide2.png" alt="Slide 2" class="img-fluid">
            <h6 class="carousel_text">In a landmark collaboration, Nithish Software Solutions transformed our client's CRM website into an epitome of user experience excellence. We adhered to industry best practices, focusing on user-centric design, data management efficiency, intuitive interfaces, robust security, scalability, and mobile responsiveness. The result? Our client achieved remarkable customer engagement, streamlined operations, and elevated client satisfaction. This accomplishment reaffirms our dedication to delivering CRM web solutions that redefine industry standards.</h6>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-slide-content">
            <img src="assets/img/slide3.png" alt="Slide 3" class="img-fluid">
            <h6 class="carousel_text">In a remarkable achievement, Nithish Software Solutions has elevated our client's online presence with service-based and ecommerce websites that set the bar for user experience standards. We diligently adhered to industry best practices, focusing on user-centric design, seamless transactions, intuitive navigation, secure transactions, scalability, and mobile responsiveness. The result? Our clients witnessed increased conversions, brand loyalty, and a strong digital presence. This accomplishment reaffirms our commitment to delivering websites that redefine industry benchmarks.</h6>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-slide-content">
            <img src="assets/img/slide8.png" alt="Slide 4" class="img-fluid">
            <h6 class="carousel_text">In a game-changing partnership, Nithish Software Solutions elevated our client's OTT platform to new heights, setting the gold standard for user experience. By adhering to best practices in user-centric design, content delivery, personalization, security, and accessibility, we crafted an unmatched viewing experience. Our client reaped the rewards, achieving higher user engagement and satisfaction. This success underscores our commitment to delivering cutting-edge OTT solutions that redefine industry standards.</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- <div class="carousel-controls">
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <i class="fa-solid fa-circle-arrow-left"></i>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <i class="fa-solid fa-circle-arrow-right"></i>
      </a>
    </div> -->
</div>



<section class="why">
    <div class="container p-5 mt-3 mb-3">
      <div class="row">
        <div class="col-md-9">
          <h3 class="why animate__animated" data-animation="animate__slideInLeft">Why Nithish Software Soluction?</h3>
          <p class="why text-justify font-weight-bold animate__animated" data-animation="animate__slideInLeft">We've excelled in creating high-impact digital experiences that drive conversions.
            Our expertise combines strategic vision, cutting-edge technology, and extensive industry insight. Trusted by
            both SMBs and global enterprises, we specialize in crafting web solutions that deliver results. When you
            seek a top website design company, choose us for a proven track record of excellence.</p>
          <div class="row">
            <div class="col-sm-2 text-center">
              <figure class="animate__animated" data-animation="animate__slideInUp">
                <img src="assets/img/tdesign_time-filled.png" alt="On Time Delivery" class="img-fluid">
                <figcaption class="reas">On Time Delivery</figcaption>
              </figure>
            </div>
            <div class="col-sm-2 text-center">
              <figure class="animate__animated" data-animation="animate__slideInUp">
                <img src="assets/img/Vector (9).png" alt="20+ Skilled and Experienced Developers" class="img-fluid">
                <figcaption class="reas">20+ Skilled and Experienced Developers</figcaption>
              </figure>
            </div>
            <div class="col-sm-2 text-center">
              <figure class="animate__animated" data-animation="animate__slideInUp">
                <img src="assets/img/solar_money-bag-bold.png" alt="Reasonable and Competitive Pricing" class="img-fluid">
                <figcaption class="reas">Reasonable and Competitive Pricing</figcaption>
              </figure>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <img src="assets/img/nss.png" alt="Nithish Software Solution" class="img-fluid animate__animated" data-animation="animate__slideInRight">
        </div>
      </div>
    </div>
  </section>

  
  


<section id="help_section">
    <div class="text-center">
      <button class="btn_1 font-weight-bold mt-3 mb-3">How Can We Help You</button>
    </div>
    <div class="container p-3 mb-4">
      <div class="row">
        <div class="col-md-6 animate__animated" data-animation="animate__fadeInLeft">
          <div class="iframe-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.3711533225774!2d83.30448701385481!3d17.727142697585425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39433b791e1bd9%3A0xa22b0b4ec913fc2!2sEswar%20Plaza%2C%20Dwarakanagar%20Rd%2C%20Dwaraka%20Nagar%2C%20Visakhapatnam%2C%20Andhra%20Pradesh%20530016!5e0!3m2!1sen!2sin!4v1661854649331!5m2!1sen!2sin"
              allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col-md-6 animate__animated" data-animation="animate__fadeInRight">
          <h4 class="font-weight-bold">Drop a Message</h4>
          <form id="contactForm">
            <div class="form-group mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
              <span id="name_error" class="error"></span>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                <span id="email_error" class="error"></span>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="phoneno" name="phoneno" maxlength="10" placeholder="Your Contact Number">
                <span id="phoneno_error" class="error"></span>
              </div>
            </div>
            <div class="form-group mb-3">
              <textarea name="message" class="form-control" placeholder="Type your Message" style="width: 100%; height: 150px;"></textarea>
              <span id="message_error" class="error"></span>
            </div>
            <button type="submit" class="btn btn-primary custom-btn animate__animated" data-animation="animate__fadeInUp">Send Message</button>
          </form>
          <div id="status_message"></div>
        </div>
      </div>
    </div>
  </section>

  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const elements = document.querySelectorAll('[data-animation]');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const element = entry.target;
            const animationClass = element.getAttribute('data-animation');
            element.classList.add(animationClass);
            
            // Remove animation class after animation ends
            element.addEventListener('animationend', () => {
              element.classList.remove(animationClass);
            }, { once: true });
          }
        });
      }, {
        threshold: 0.1
      });

      elements.forEach(element => {
        observer.observe(element);
      });
    });
  </script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    jQuery(document).ready(function ($) {
        $("form#contactForm").submit(function (event) {
            event.preventDefault();

            $(".error").html(""); // Clear all existing error messages

            var formData = new FormData(this); // Form data

            $.ajax({
                type: "POST",
                url: "contact_submit.php", // Update to your server-side script URL
                data: formData,
                processData: false,
                contentType: false,
                dataType: "text", // Expected data type from server
                success: function (data) {
                    if (data.trim() === "ok") {
                        $("#status_message").html("<p style='color: green;'>Message sent successfully!</p>");
                        setTimeout(function() {
                            $("#status_message").html("");
                        }, 3000);
                        $("#contactForm")[0].reset();
                    } else if (data.trim() === "not") {
                        $("#status_message").html("<p style='color: red;'>Message sending failed. Please try again!</p>");
                    } else {
                        var form_errors = data.split('|');
                        $.each(form_errors, function (key, value) {
                            if (value === "name_miss") {
                                $("#name_error").html("Name is required");
                            } else if (value === "name_format_miss") {
                                $("#name_error").html("Only alphabets and white spaces are allowed");
                            } else if (value === "email_miss") {
                                $("#email_error").html("Email is required");
                            }  else if (value === "email_format_miss") {
                                $("#email_error").html("This is an invalid email");
                            } else if (value === "phoneno_miss") {
                                $("#phoneno_error").html("Phone Number is required");
                            }
                            else if (value==="phoneno_invalid") {
                                $("#phoneno_error").html("Phone Number Invalid");
                            }
                            else if (value==="phoneno_length") {
                                $("#phoneno_error").html("Phone Number must be exactly 10 digits");
                            }
                            if(value == "message_miss"){
                              $("#message_error").html("Message is required");
                            }
                        });
                    }
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                    $("#status_message").html("<p style='color: red;'>Error occurred during AJAX request. Please try again!</p>");
                }
            });
        });
    });
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




  <?php
include_once 'include/footer.php';
?>
