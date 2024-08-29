<?php
include_once '../config.php';
?>
    
    <footer class=" text-center text-lg-start  mt-xl-5 pt-4 bg-dark">
    <div class="p-3 border-bottom border-white text-white text-center">
    <a href="mailto:info@nssorg.com"><i class="fa-solid fa-envelope fa-2x" style="color: #f5f5f5;"></i><h7 class="p-3">info@nssorg.com</h7></a>
    <a href="tel:+0891-406856">
    <i class="fa-solid fa-phone fa-2x" style="color: #f5f5f5;"></i>
    <h7 class="p-3">0891-406856</h7>
</a>
<a href="https://maps.google.com/?q=Eswar%20Plaza,%20F.no.504,%20beside%20SBI%20Bank,%20Dwaraka%20nagar,%20Visakhaptnam-530016" target="_blank">
    <i class="fa-solid fa-location-dot fa-2x" style="color: #f5f5f5;"></i>
    <h7 class="p-3">Eswar Plaza, F.no.503, beside SBI Bank, Dwaraka nagar, Visakhaptnam-530016</h7>
</a>
    </div>
    <!-- Grid container -->
    <div class="container p-4">
    
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
         

          <ul class="list-unstyled mb-4">
            <li>
            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram fa-2x" style="color: #d9d9d9;"></i></a>
            </li>
            <li>
            <a href="https://www.youtube.com"><i class="fa-brands fa-youtube fa-2x" style="color: #d9d9d9;"></i></a>
            </li>
            <li>
            <a href="https://www.facebook.com"><i class="fa-brands fa-facebook fa-2x" style="color: #d9d9d9;"></i></a>
            </li>
            <li>
            <a href="https://www.twitter.com"><i class="fa-brands fa-twitter fa-2x" style="color: #d9d9d9;"></i></a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white"> ▸About us</a>
            </li>
            <li>
              <a href="#!" class="text-white"> ▸Advertise</a>
            </li>
            <li>
              <a href="#!" class="text-white"> ▸Terms and Conditions</a>
            </li>
            <li>
              <a href="#!" class="text-white"> ▸Privacy Policy</a>
            </li>
            <li>
              <a href="#!" class="text-white"> ▸Careers</a>
            </li>
            
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white"> ▸Home</a>
            </li>
            <li>
              <a href="#!" class="text-white"> ▸Testimonials</a>
            </li>
            <li>
              <a href="#!" class="text-white"> ▸Internship</a>
            </li>
            <li>
              <a href="#!" class="text-white"> ▸Services</a>
            </li>
            <li>
              <a href="#!" class="text-white"> ▸Corporate Client</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <form id="footer_email" method="POST" role="form" class="php-email-form w-100" name="submit-to-google-sheet">
            <div id='statu_message'></div>
          <h5 class="mb-4 text-white">E-Mail Address:</h5>
          <div class="form-outline form-white mb-4">
            <input type="email" name="email" id="form5Example2" class="form-control" placeholder="Your Email address"/>
            <span id="emailid_error" class="error"></span>
           
          </div>

          <button type="submit" class="btn btn-outline-white btn-block btn-success">Submit Now</button>

        </div>
</form>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 border-top border-white text-white">
    © 2023 Nithish Software Soluctions Pvt. Ltd. All Rights Reserved
  
    </div>
    
    <!-- Copyright -->
  </footer>

  <script>
$(document).ready(function () {
    $("form#footer_email").submit(function (event) {
        event.preventDefault();

        var form = $(this);
        var form_data = new FormData(form[0]);

        $.ajax({
            type: "POST",
            url: "./include/footer_submit.php",
            data: form_data,
            processData: false,
            contentType: false,
            cache: false,
            dataType: "text",
        }).done(function (data) {
            $(".error").html("");

            if (data.trim() === "ok") {
                $("#statu_message").html("<p style='color: green;'>E-Mail submitted successfully!</p>");
                form[0].reset();
            } else if (data.trim() === "not") {
                $("#status_message").html("<p style='color: red;'>E-Mail submission failed. Please try again!</p>");
            } else {
                form_errors = data.split('|');
                $.each(form_errors, function (key, value) {
                    
                    if (value == "email_miss") {
                        $("#emailid_error").html("Email is required");
                    }
                    if (value == "email_format_miss") {
                        $("#emailid_error").html("This is an invalid email");
                    }
                    if (value == "email_exists") {
                         $("#emailid_error").html("Email is already subscribed");
                    }
                    
                    

                });
            }
        });
    });
});


</script>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

  
