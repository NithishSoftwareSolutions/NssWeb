<?php
    include_once 'include/header.php';
    include_once 'config.php';
    error_reporting(0);
?>
<body class="unique-page" >

<div class="links" id="social-links">

<ul class="list-unstyled mb-4">
  <li>
  <a href="https://www.instagram.com"><i class="fa-brands fa-instagram fa-2x mb-2" style="color: #d9d9d9;"></i></a>
  </li>
  <li>
  <a href="https://www.youtube.com"><i class="fa-brands fa-youtube fa-2x mb-2" style="color: #d9d9d9;"></i></a>
  </li>
  <li>
  <a href="https://www.facebook.com"><i class="fa-brands fa-facebook fa-2x mb-2" style="color: #d9d9d9;"></i></a>
  </li>
  <li>
  <a href="https://www.twitter.com"><i class="fa-brands fa-twitter fa-2x mb-2" style="color: #d9d9d9;"></i></a>
  </li>
</ul>

</div>




<div class="container mt-4">
    <div class="row">
        <div class="col-md-5">
            <h2 class="text-black">Kindly share with us<br> your requirement</h2>
            <h5 class="text-black mb-5">We are always willing to help you with our services</h5>
            <form  id="contact_form" method="POST" role="form" class="php-email-form w-100" name="submit-to-google-sheet">
            <div id='status_message'></div>
         
            <div class="form-outline mb-4">
                <input type="text" id="form4Example1" class="form-control" name="name" placeholder="Name" />
                <span id="name_error" class="error"></span>
            </div>

            <div class="form-outline mb-4">
                <input type="email" id="form4Example2" class="form-control" name="email" placeholder="Email address" />
                <span id="email_error" class="error"></span>
            </div>

           
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form4Example3" name="message" rows="4" placeholder="Requirement"></textarea>
                <span id="message_error" class="error"></span>
            </div>


            <div class="text-center">
            <button type="submit" class="btn btn-outline-white btn-secondary">Send Requirement</button></div>
            </form>
            <span id="msg"></span>
            
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <!-- <h2 class="mb-4 text-center">Contact Us </h2> -->
            <div class="container">     
                    <div>
                    <div class="text-center pb-2 mt-5 pt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.3711533225774!2d83.30448701385481!3d17.727142697585425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39433b791e1bd9%3A0xa22b0b4ec913fc2!2sEswar%20Plaza%2C%20Dwarakanagar%20Rd%2C%20Dwaraka%20Nagar%2C%20Visakhapatnam%2C%20Andhra%20Pradesh%20530016!5e0!3m2!1sen!2sin!4v1661854649331!5m2!1sen!2sin" width="327" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    <!-- <a href="https://maps.google.com/?q=Eswar%20Plaza,%20F.no.504,%20beside%20SBI%20Bank,%20Dwaraka%20nagar,%20Visakhaptnam-530016" target="_blank">
                        <i class="fa-solid fa-location-dot fa-2x" style="color: #85b6ff;margin-right: 10px;"></i>
                        <h4 class="text-left text-black" style="display: inline-block;">Address</h4>
                        
                        <h5 class="text-left text-black m-4">Eswar Plaza, F.No.503, Beside SBI Bank, Dwaraka Nagar, Visakhapatnam-530016.</h5></a> -->
                    </div>

                    <!-- <div>
                    <a href="tel:+919391098686">
                        <i class="fa-solid fa-phone fa-2x" style="color: #85b6ff;margin-right: 10px;"></i>
                        <h4 class="text-left text-black" style="display: inline-block;">Phone number</h4>
    
                        <h5 class="text-left text-black m-4">+91 9391098686</h5></a>
                    </div> -->

                    <!-- <div>
                    <a href="mailto:info@nssorg.com">
                        <i class="fa-regular fa-envelope fa-2x" style="color: #85b6ff;margin-right: 10px;"></i>
                        <h4 class="text-left text-black" style="display: inline-block;">Email Address</h4>
                        
                        <h5 class="text-left text-black m-4">info@nssorg.com</h5></a>
                    </div>             -->
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function () {
    $("form#contact_form").submit(function (event) {
        event.preventDefault();

        var c_form = $("#contact_form")[0];
        var form_data = new FormData(c_form);

        $.ajax({
            type: "POST",
            url: "contactus_submit.php",
            data: form_data,
            processData: false,
            contentType: false,
            cache: false,
            dataType: "text",
        }).done(function (data) {
            // Clear existing error messages
            $(".error").html("");

            if (data.trim() === "ok") {
                $("#status_message").html("<p style='color: green;'>Message sent successfully!</p>");
                $("form#contact_form")[0].reset();
            } else if (data.trim() === "not") {
                $("#status_message").html("<p style='color: red;'>Message sending failed. Please try again!</p>");
            } else {
                form_errors = data.split('|');
                $.each(form_errors, function (key, value) {
                    if (value == "name_miss") {
                        $("#name_error").html("Name is required");
                    }
                    if (value == "name_format_miss") {
                        $("#name_error").html("Only alphabets and white spaces are allowed");
                    }
                    if (value == "email_miss") {
                        $("#email_error").html("Email is required");
                    }
                    if (value == "email_exists") {
                        $("#email_error").html("Email is already subscribed");
                    }
                    if (value == "email_format_miss") {
                        $("#email_error").html("This is an invalid email");
                    }
                    if (value == "message_miss") {
                        $("#message_error").html("Message is required");
                    }
                });
            }
        });
    });
});

function checkScroll() {
    var socialLinks = document.getElementById("social-links");
    if (window.scrollY > 200) { // Adjust 500 to the desired scroll position where you want the div to disappear
      socialLinks.style.display = "none"; // Hide the div
    } else {
      socialLinks.style.display = "block"; // Show the div
    }
  }

  // Add a scroll event listener to call the checkScroll function when the user scrolls
  window.addEventListener("scroll", checkScroll);



</script>
</body>

<?php
    include_once 'include/footer.php';
?>





