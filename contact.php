<!-- ======= Header ======= -->
<?php
include_once 'include/loader.php';
        include_once 'include/header.php';
        include_once 'config.php';
    ?>

   
   <style>
       
                .contact-form {
                    background: #fff;
            margin-top: -7%;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #a39f9f;
            /* position: absolute; */
            width: auto;
            height: auto;
        }
        
        .contact-form .form-control {
            border-radius: 0.5rem;
        }
        .contact-form h3 {
            margin-bottom: 20px;
            text-align: center;
            color: #0062cc;
        }
        .btnContact {
            width: 100%;
            border: none;
            border-radius: 1rem;
            padding: 10px;
            background: #0062cc;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            margin-top: 10px;
        }
        .header {
            background-color: #004085;
            color: white;
            padding: 85px;
            
        }
        .header p {
            margin: 0;
        }
        .contact-image {
            position: absolute;
            top: -107px;
            right: -287px;
            text-align: right;
           
        }
        .contact-image img {
            border-radius: 50%;
            width: 300px;
            height: 318px;
            margin-bottom: 10px;
            margin-left: 86%;
    
        }
        .contact-image .user-images {
            display: flex;
            justify-content: flex-end;
        }
        .contact-image .user-images img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: -10px;
        }
        .header{

            margin-top:5%;
        }

        .spa{

            margin-bottom: 10%;
        }

        .form-group12{

            background: #D9D9D9 !important;
            font-size: 18px !important;
            padding: 29px !important;
            font-weight: 700 !important;
            font-family: Bitter !important;


        }

        .Kindly{
            margin-left: -2% !important;
            font-family: Bitter;
        }
        .Kindly1{
            margin-left: -2% !important;
            font-family: Bitter;
        }

        @media (max-width: 1024px) {
            .contact-image img {
                margin-left: 66%;
            }
            .Kindly{
            margin-left:-2% !important;
        }
        .Kindly1{
            margin-left:-2% !important;
        }
        }
        @media (min-width: 1440px) {
        .Kindly{
            margin-left:8% !important;
        }
        .Kindly1{
            margin-left:8% !important;
        }
    }
        @media (max-width: 768px) {
            .contact-image {
        position: absolute;
        top: -61px;
        right: 0px;
        }
        .Kindly{
            margin-left:-5% !important;
        }
        .Kindly1{
            margin-left:-5% !important;
        }
   .contact-image img {
          
            width: 181px;
            height: 183px;
            margin-bottom: 10px;
            margin-left: 119% !important;
        }
        }

        @media (max-width: 426px) {
            .contact-image {
                display: none;
            }

            .header{
                padding: 40px;
                margin-top: 17%;
            }
            .Kindly{
            font-size:26px !important;
            margin-left:2%;
        }
        }

        @media (max-width: 376px) {

            .header{
                padding: 40px;
            }
            .Kindly{
            font-size:22px !important;
            margin-left:2%;
        }

    }
        @media (min: 767px) {
            .contact-image  img{
                display: none !important;
            }

        }

         /* Keyframes for fade-in animation */
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    /* Keyframes for slide-up animation */
    @keyframes slideUp {
        0% {
            transform: translateY(50px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Keyframes for slide-in-right animation */
    @keyframes slideInRight {
        0% {
            transform: translateX(50px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    /* Apply animations to specific elements */
    .header {
        animation: fadeIn 1s ease-out;
    }

    .contact-form {
        animation: slideUp 1s ease-out;
    }

    .contact-image {
        animation: slideInRight 1s ease-out;
    }
    @media (max-width: 320px) {
        .Kindly{
            font-size:23px;
        }

    }
    @media (min-width: 2560px) {
        .header{
            margin-top:3%;
        }
        .Kindly{
            font-size:50px !important;
        }
        .Kindly1{
            font-size:30px;
        }
        .contact-form{
            width:850px;
            height:490px;
            margin-left:-85% !important;
        }
    }
    
     
    </style>    
    <div class="header animate__animated animate__fadeIn">
    <h2 class="Kindly">Kindly share your requirement <br> with Us</h2>
    <p class="Kindly1">We are always willing to help you with our services</p>
</div>

<div class="container animate__animated animate__fadeInUp">
    <div class="row">
        <div class="col-md-8 col-lg-6">
            <div class="contact-form">
                <form id="contact_form" method="POST" role="form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form-group12" placeholder="Your Name *" />
                        <span id="name_error" class="error"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control form-group12" placeholder="Your Email Address *" />
                        <span id="email_error" class="error"></span>
                    </div>
                    <div class="form-group">
                        <textarea name="requirement" class="form-control form-group12" placeholder="Your Requirement *" style="width: 100%; height: 150px;"></textarea>
                        <span id="requirement_error" class="error"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                    </div>
                </form>
                <div id="status_message"></div>
            </div>
            <div class="contact-image animate__animated animate__fadeInRight">
                <img src="assets/img/68.png" alt="Contact Form Image" class="img-responsive" />
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>




<div class="spa"></div>

  <script>
    jQuery(document).ready(function ($) {
        $("form#contact_form").submit(function (event) {
            event.preventDefault();

            $(".error").html(""); // Clear all existing error messages

            var formData = new FormData(this); // Form data

            $.ajax({
                type: "POST",
                url: "contactus_submit.php", // Update to your server-side script URL
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
                        $("#contact_form")[0].reset();
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
                            } else if (value === "requirement_miss") {
                                $("#requirement_error").html("Message is required");
                            }
                            if(value == "contact_miss"){
                              $("#contact_error").html("Contact is required");
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


    </script>

<?php
    include_once 'include/footer.php';
?>
