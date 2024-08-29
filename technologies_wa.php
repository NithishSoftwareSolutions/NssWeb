
<?php
include_once 'include/header.php';
include_once 'config.php';
error_reporting(0);
?>
 
<style>
.section_heading{
  font-family:'Bitter';
}
.text{
  font-family:'Nunito';
}
@media (max-width: 767.98px) {
  .custom-mt-margin {
    margin-top: 4% /* equivalent to mt-3 */
  }
}
 
/* Remove mt-3 for medium and larger screens */
@media (min-width: 768px) {
  .custom-mt-margin {
    margin-top: 0; /* equivalent to mb-md-0 */
  }
}
 
#top_section {
  margin-top: -2%;
}
/* Define the scroll-based animation */
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
 
/* Apply scrollAnimation to elements */
.section {
  opacity: 0; /* Start with opacity 0 */
  animation: scrollAnimation 0.6s ease-in-out forwards; /* Apply animation */
}
 
/* Additional styles as needed */
 
#heading_2 {
  font-size: 48px;
  font-family: "Bitter";
}
 
.section {
  background-color: #0A4C89;
  color: white;
  padding: 2rem;
  margin-bottom: 2rem;
}
 
.tech-list img {
  width: 50px;
  height: 50px;
  margin: 0 10px;
}
 
.technologies {
  padding: 0% !important;
  margin-top: 5%;
}
 
@media (min-width: 1024px) {
  .section {
    display: flex !important;
  }
 
  .tecside_left {
    margin-left: 17%;
  }
 
  .pro {
    display: flex;
    padding: 0%;
    width: 173%;
  }
}
 
@media (min-width: 1024px) {
  .pro {
    display: flex;
    padding: 0%;
    width: 109%;
  }
}
 
.telo_2 {
  font-family: "Bitter";
}
 
.telo {
  font-family: "Nunito";
}
 
.pro li {
  font-family: "Nunito";
}
 
#offcanvasNavbarLabel {
  font-family: "Bitter" !important;
  color: #ffffff !important;
}
 
@media (min-width: 768px) {
  .top_section {
    margin-top: 20%;
  }
 
  #heading_2 {
    font-size: 40px;
    font-family: "Bitter";
    font-weight: 700;
  }
}
 
@media (max-width: 426px) {
  #top_section {
    margin-top: 18% !important;
  }
 
  .section {
    background-color: #ffffff;
    color: black;
    padding: 2rem;
    margin-bottom: 2rem;
    display: flex;
    flex-direction: column-reverse;
    margin-top:-13%;
  }
 
  #heading_2 {
    font-size: 39px;
    font-family: "Bitter";
  }
  .telo_2 {
 
margin-top: 2%;
margin-bottom:1% !important;
}
}
 
@media (max-width: 376px) {
  #top_section {
    margin-top: 19% !important;
  }
 
  #heading_2 {
    font-size: 36px;
    font-family: "Bitter";
  }
  .telo_2 {
 
    margin-top: 2%;
  }
}
 
@media (max-width: 320px) {
  #heading_2 {
    font-size: 26px !important;
  }
 
  .nithishs {
    width: 74%;
  }
 
  .telo_2 {
    font-size: 27px;
    margin-top: 6%;
  }
 
  #top_section {
    margin-top: 23% !important;
  }
 
  .section {
    background-color: #ffffff;
    color: black;
    padding: 2rem;
    margin-bottom: 1rem;
    display: flex;
    flex-direction: column-reverse;
  }
}
 
/* General Styles */
.section {
  overflow: hidden;
  padding: 15px;
}
 
.pro {
  list-style-type: disc;
  padding: 0;
  max-width: 100%;
  /* text-align:justify; */
}
 
.pro li {
  margin-bottom: 10px;
  word-wrap: break-word;
}
 
/* Flexbox Layout */
.custom-row {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}
 
.custom-col-6, .custom-col-12 {
  flex: 1 1 100%;
}
 
@media (min-width: 768px) {
  .custom-col-6 {
    flex: 1 1 48%;
  }
}
 
/* Responsive Text and Padding */
.telo_2 {
  /* font-size: 24px; */
  margin-bottom:3%;
  /* text-align: center; */
}
 
.telo {
  font-size: 16px;
  line-height: 1.6;
  text-align: justify;
}
 
@media (max-width: 1024px) {
  .telo {
    font-size: 14px;
  }
}
 
@media (min-width: 1024px) and (max-width: 1200px) {
  .pro li {
    font-size: 12px;
  }
}
 
/* CSS for Slide-up Animation */
.section {
  opacity: 0;
  transform: translateY(50px);
  transition: opacity 0.6s ease-in-out, transform 0.6s ease-in-out;
}
 
.section.show {
  opacity: 1;
  transform: translateY(0);
}
.content-section {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
 
.content-section .telo {
  margin-bottom: 1rem; /* Adds some space between the paragraph and the list */
}
 
.content-section .pro {
  padding-left: 20px; /* Aligns the bullet points with the paragraph */
}
</style>
</head>
<body>
 
<section id="top_section" class="top_section">
  <div class="bg-image p-5 text-center shadow-1-strong mb-5 text-white" style="background-image: url('assets/img/services.gif'); height:auto; margin-top:8%;">
    <h1 class="heading_2 text-center" id="heading_2">TECHNOLOGIES</h1>
  </div>
</section>
 
 
<div class="section col-lg-10 col-md-12">
  <div class="col-lg-6 content-section">
    <h3 class="section_heading custom-mt-margin">Design & Branding</h3>
    <p class="text-justify text">Web technologies encompass tools and protocols vital for the internet's functionality. HTML structures web content, while CSS styles it, creating visually appealing pages. JavaScript adds interactivity and dynamic features to websites, engaging users. HTTP facilitates communication between clients and servers, enabling resource retrieval. Backend technologies, like Python and PHP, manage server-side logic and databases store and retrieve data. APIs connect web services, fostering data exchange, and frontend frameworks like React enhance application development. Web security safeguards against threats, ensuring safe user experiences on the web.</p>
    <ul class="pro">
      <li>Node JS Development</li>
      <li>Angular Development</li>
      <li>React Development</li>
      <!-- <li>Mongo DB</li> -->
      <li>PHP programming</li>
    </ul>
  </div>
  <div class="col-lg-6 text-center">
    <img src="assets/img/50.png" alt="" class="img-fluid">
  </div>
</div>
 
 
<div class="section col-lg-10 col-md-12 tecside_left">
  <div class="col-lg-6 content-section">
    <h3 class="section_heading custom-mt-margin">CMS Technologies</h3>
    <p class="text-justify text">Content Management System (CMS) programming is the development of software applications that enable the creation, modification, and organization of digital content. CMS platforms like WordPress, Joomla, and Drupal are commonly used to manage websites, blogs, and applications.</p>
    <ul class="pro">
      <li>WordPress Development</li>
      <li>Joomla Development</li>
      <li>Drupal Development</li>
      <li>PHP programming</li>
    </ul>
  </div>
  <div class="col-lg-6 text-center">
    <img src="assets/img/52.png" alt="" class="img-fluid">
  </div>
</div>
 
<div class="section col-lg-10 col-md-12">
  <div class="col-lg-6 content-section">
    <h3 class="section_heading custom-mt-margin">eCommerce Technologies</h3>
    <p class="text-justify text">E-commerce technologies encompass a broad array of digital tools and systems that facilitate online buying and selling. These technologies include e-commerce platforms like Shopify and WooCommerce for setting up online stores, payment gateways such as PayPal and Stripe for secure transactions, inventory management systems to track product stock, robust security protocols to safeguard customer data, mobile optimization for a seamless shopping experience on various devices, content management systems (CMS) like WordPress for product listings and content creation.</p>
    <ul class="pro">
      <li>Magento Development</li>
      <li>Shopify Development</li>
      <li>PHP programming</li>
      <li>eCommerce Development</li>
    </ul>
  </div>
  <div class="col-lg-6 text-center">
    <img src="assets/img/555.png" alt="" class="img-fluid">
  </div>
</div>
 
<div class="section col-lg-10 col-md-12 tecside_left">
  <div class="col-lg-6 content-section">
    <h3 class="section_heading custom-mt-margin">Mobile Technologies</h3>
    <p class="text-justify text">Web technologies encompass tools and protocols vital for the internet's functionality. HTML structures web content, while CSS styles it, creating visually appealing pages. JavaScript adds interactivity and dynamic features to websites, engaging users. HTTP facilitates communication between clients and servers, enabling resource retrieval. Backend technologies, like Python and PHP, manage server-side logic and databases store and retrieve data. APIs connect web services, fostering data exchange, and frontend frameworks like React enhance application development.</p>
    <ul class="pro">
      <li>Android Development</li>
      <li>iOS Development</li>
      <li>React Development</li>
       <li>PHP programming</li>
       <li>jQuery Mobile</li>
    </ul>
  </div>
  <div class="col-lg-6 text-center">
    <img src="assets/img/54.png" alt="" class="img-fluid">
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function() {
  // Function to check if an element is in viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
 
  // Function to handle scroll event and check each section
  function checkSections() {
    $('.section').each(function() {
      if (isElementInViewport(this)) {
        $(this).addClass('show');
      } else {
        $(this).removeClass('show'); // Ensure to remove class if element is not in viewport
      }
    });
  }
 
  // Initial check when page loads
  checkSections();
 
  // Check sections on scroll and resize
  $(window).on('scroll resize', function() {
    checkSections();
  });
 
  // Check sections on page load for mobile devices
  $(window).on('load', function() {
    checkSections(); // Ensure to check sections when the page loads on mobile
  });
});
</script>
 
</script>
 
<script>
$(document).ready(function() {
  // Function to check if an element is in viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    var windowHeight = window.innerHeight || document.documentElement.clientHeight;
    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    // Adjust the bottom boundary based on the viewport height
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= windowHeight &&
      rect.right <= windowWidth
    );
  }
 
  // Function to handle scroll event and check each section
  function checkSections() {
    $('.section').each(function() {
      if (isElementInViewport(this)) {
        $(this).addClass('show');
      } else {
        $(this).removeClass('show'); // Remove the class if not in viewport
      }
    });
  }
 
  // Initial check when page loads
  checkSections();
 
  // Check sections on scroll and resize
  $(window).on('scroll resize', function() {
    checkSections();
  });
 
  // Check sections on page load
  $(window).on('load', function() {
    checkSections(); // Ensure to check sections when the page loads
  });
});
</script>
 
<?php
include_once 'include/footer.php';
?>
 
 
