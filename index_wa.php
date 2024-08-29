<?php
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

/* Apply initial styles to the brand logos */
.brand-logo {
  opacity: 0; /* Start with opacity 0 */
  animation: scrollAnimation 0.6s ease-in-out forwards; /* Apply animation */
  animation-delay: 0s; /* Delay the animation for staggered effect */
}
.tech_cards{
  font-size: x-large;
  font-weight: 800;
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


<div class="container">
  <div class="col">
    <div class="row"></div>
  </div>
</div>

<section class="band">
  <div class="container band_2">
    <div class="row">
      <div class="col-xl-12">
        <h2 class="top_h1 text-left">Top brands we work for</h2>

        <div id="band_3">


          <div class="col-xl-2 band_4">
            <img src="assets/img/Component 23.png" alt="Brand 1" class="brand-logo">
          </div>
          <div class="col-xl-2 band_4">
            <img src="assets/img/Component 24.png" alt="Brand 2" class="brand-logo">
          </div>
          <div class="col-xl-2 band_4">
            <img src="assets/img/sign-in.png" alt="Brand 3" class="brand-logo">
          </div>
          <div class="col-xl-2 band_4">
            <img src="assets/img/waymaart.png" alt="Brand 4" class="brand-logo">
          </div>
          <div class="col-xl-2 band_4">
            <img src="assets/img/waymoney.png" alt="Brand 5" class="brand-logo">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<section id="featuredservices">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="text-center">

          <h2 class="Featured_Services mt-5">FEATURED SERVICES</h2>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h5 class="text-center p-3 P_Our">
          Our cross-functional teams specialize in crafting flawless web solutions, from design to development and
          marketing. We seamlessly blend creativity and technical expertise to deliver impeccable results. Our holistic
          approach ensures a cohesive and effective online presence for our clients.
        </h5>
      </div>
    </div>
  </div>
</section>





<section id="featuredservices">
  <div class="container-fluid container_reach">
    <div class="row m-4 text-center horizo">
      <div class="col-12 col-md-4 col-lg-2 mb-4">
        <div class="column-container">
          <div class="horizontal-line-container"></div>
          <img src="assets/img/research.png" alt="Research" class="image-zoom img-fluid">
          <figcaption class="text-white figcaption-small">
            <h5 class="mt-3">Research</h5>
          </figcaption>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-2 mb-4">
        <div class="column-container">
          <div class="horizontal-line-container"></div>
          <img src="assets/img/design-removebg-preview.png" alt="Design" class="image-zoom img-fluid">
          <figcaption class="text-white figcaption-small">
            <h5 class="mt-3">Design</h5>
          </figcaption>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-2 mb-4">
        <div class="column-container">
          <div class="horizontal-line-container"></div>
          <img src="assets/img/developer 3.png" alt="Development" class="image-zoom img-fluid">
          <figcaption class="text-white figcaption-small">
            <h5 class="mt-3">Development</h5>
          </figcaption>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-2 mb-4">
        <div class="column-container">
          <div class="horizontal-line-container"></div>
          <img src="assets/img/testing.png" alt="Testing" class="image-zoom img-fluid">
          <figcaption class="text-white figcaption-small">
            <h5 class="mt-3">Testing</h5>
          </figcaption>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-2 mb-4">
        <div class="column-container">
          <div class="horizontal-line-container"></div>
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
      <div class="col hover_img">
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
      <div class="col hover_img ">
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
      <div class="col hover_img">
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
      <div class="col hover_img">
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
      <div class="col hover_img">
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
      <div class="col hover_img">
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



  <section class="i">
    <div class="container">

      <div class="row">

        <div class="col">

          <h2 class="text-center m-5 tools_h2">Tools and Technology</h2>
          <div class="row">
            <div class="col">

              <div id="slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
                <ol class="carousel-indicators">
                  <li data-target="#slider" data-slide-to="0" class="active"></li>
                  <li data-target="#slider" data-slide-to="1"></li>
                  <li data-target="#slider" data-slide-to="2"></li>
                  <li data-target="#slider" data-slide-to="3"></li>
                  <li data-target="#slider" data-slide-to="4"></li>
                </ol>

                <div class="carousel-inner mb-5">
                  <div class="carousel-item active bandicone_1" style=" display: flex; justify-content: center;">
                    <img class="d-block img-fluid" src="assets/img/Frame 71.png">
                  </div>
                  <div class="carousel-item bandicone_2 " style=" display: flex; justify-content: center; ">
                    <img class="d-block img-fluid" src="assets/img/Frame 81.png">
                  </div>
                  <div class="carousel-item bandicone_3" style=" display: flex; justify-content: center;">
                    <img class="d-block img-fluid" src="assets/img/Frame 82.png">
                  </div>
                  <div class="carousel-item bandicone_4" style=" display: flex; justify-content: center;">
                    <img class="d-block img-fluid" src="assets/img/Frame 85.png">
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
  </section>


  <section>
    <div class="container-fluid p-0">
      <div class="row" style="width: 100%;">
        <div class="col-12 position-relative p-0">
          <img src="assets/img/31.png" alt="We are Hiring" class="img-fluid triangle1">
          <div class="text-overlay1">
            <h1 class="weare">We are Hiring!</h1>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="show_casing">
    <div class="container ">
      <!-- <h3 class="text-center mt-4 mb-4">Showcasing Our Expertise<br> WEBSITE & MOBILE APP</h3> -->

      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Slides -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row app4">
                <div class="col">
                  <img src="assets/img/33.png" alt="Slide 1" class="img-fluid">
                </div>
                <div class="col app2">
                  <p class="app3" style="font-family: Nunito; font-weight: 700;">Join our team and be part of something
                    great! Explore exciting career opportunities with us today.</p>


                  <div class="row">
                    <div class="col app1">
                      <ul>
                        <li id="app12">Web Developer</li>
                        <li id="app12">React Developer</li>
                        <li id="app12">IOS Developer</li>
                        <li id="app12">App Developer</li>
                        <li id="app12">Testing</li>
                      </ul>

                      <ul>
                        <li id="app12">PHP Developer</li>
                        <li id="app12">UI UX Designer</li>
                        <li id="app12">Angular Developer</li>
                        <li id="app12">Digital Marketer</li>
                        <li id="app12">Video Editing</li>

                      </ul>

                    </div>
                  </div>
                  <!-- 
              <div class="text-center">
                <div class="carousel-control-prev-container">
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                    <i id="custom-prev" class="fa-solid fa-circle-arrow-left fa-2x"></i>
                  </a>
                </div>
                <div class="carousel-control-next-container">
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    <i id="custom-next" class="fa-solid fa-circle-arrow-right fa-2x"></i>
                  </a>
                </div>
              </div> -->
                </div>
              </div>
            </div>

          </div>


  </section>




  <section>
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
  </section>

  <section class="show_casing2 p-5">
    <div class="container showcasing4">
      <div class="row showcasing5 ">
        <div class="col-md-8">
          <h3 class="whynithis">Why Nithish Software Solution?</h3>
          <p class="mb-4 whyinthis2">We've excelled in creating high-impact digital experiences that drive conversions.
            Our expertise combines strategic vision, cutting-edge technology, and extensive industry insight. Trusted by
            both SMBs and global enterprises, we specialize in crafting web solutions that deliver results. When you
            seek a top website design company, choose us for a proven track record of excellence.</p>
          <div class="row icon1">
            <div class="col-lg-2 col-md-6" id="icon123">
              <figure>
                <img src="assets/img/solar_money-bag-bold.png" alt="Reasonable and Competitive Pricing"
                  class="img-fluid">
                <figcaption class="reas">Reasonable and Competitive Pricing</figcaption>
              </figure>
            </div>
            <div class="col-lg-2 col-md-6" id="icon123">
              <figure>
                <img src="assets/img/tdesign_time-filled.png" alt="On Time Delivery" class="img-fluid">
                <figcaption class="reas">On Time Delivery</figcaption>
              </figure>
            </div>
            <div class="col-lg-2 col-md-6" id="icon123">
              <figure>
                <img src="assets/img/Vector (9).png" alt="20+ Skilled and Experienced Developers" class="img-fluid">
                <figcaption class="reas">20+ Skilled and Experienced Developers</figcaption>
              </figure>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <img src="assets/img/nss.png" alt="Nithish Software Solution" class="img-fluid">
        </div>
      </div>
    </div>
  </section>


  <section id="help-section12">

    <div class="container help-section">
      <div class="row justify-content-center">
        <div class="col-md-5 howcanwe">
          <h2>How Can We Help You</h2>
        </div>
      </div>
      <div class="row form-container dropaMessage">
        <div class="col-md-6">
          <div class="text-center google_iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.3711533225774!2d83.30448701385481!3d17.727142697585425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39433b791e1bd9%3A0xa22b0b4ec913fc2!2sEswar%20Plaza%2C%20Dwarakanagar%20Rd%2C%20Dwaraka%20Nagar%2C%20Visakhapatnam%2C%20Andhra%20Pradesh%20530016!5e0!3m2!1sen!2sin!4v1661854649331!5m2!1sen!2sin" width="327" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google_iframe"></iframe>
                        </div>
  
        </div>
        <div class="col-md-6">
            <h4>Drop a Message</h4>
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
                <button type="submit" class="btn btn-primary custom-btn">Send Message</button>
            </form>
            <div id="status_message"></div>
        </div>

  </section>

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
<script>
  $(document).ready(function() {
    // Function to check if element is in viewport
    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    // Function to add animation class when element is in viewport
    function addAnimationClassIfVisible() {
      $('.lets, .elev, .solid_1, .triangle').each(function() {
        if (isElementInViewport(this)) {
          $(this).addClass('animate');
        }
      });
    }

    // Trigger animation check on page load and scroll
    addAnimationClassIfVisible();
    $(window).scroll(addAnimationClassIfVisible);
  });
  document.addEventListener("DOMContentLoaded", function() {
  const brands = document.querySelectorAll('.brand-logo');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target); // Stop observing once the animation has been triggered
      }
    });
  }, {
    threshold: 0.1 // Trigger when 10% of the element is visible
  });

  brands.forEach(brand => {
    observer.observe(brand);
  });
});
</script>



<script>
  // var swiper = new Swiper('.swiper-container', {
  //   slidesPerView: 1,
  //   spaceBetween: 30,
  //   pagination: {
  //     el: '.swiper-pagination',
  //     clickable: true,
  //   },
  // });
</script>


<script>
  // var swiper = new Swiper('.swiper-container', {
  //   slidesPerView: 1,
  //   spaceBetween: 30,
  //   pagination: {
  //     el: '.swiper-pagination',
  //     clickable: true,
  //   },
  // });

 


  
</script>



  <?php
include_once 'include/footer.php';
?>
