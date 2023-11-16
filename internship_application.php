<?php
    include_once 'include/header.php';
    include_once 'config.php';
    error_reporting(0);
?>
<body class="unique-page">
<div class="links">

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


<img src="assets/img/job1.png" class="img-fluid w-100" alt="...">

<section id="application-form">
    <div class="container mt-5 mb-5 w-50">
        <form id="application_form" method="POST" role="form" class="php-email-form w-100" name="submit-to-google-sheet">
            <div id='status_message'></div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" name="fname" placeholder="First name" />
                    </div>
                    <span id="fname_error" class="error"></span> 
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" name="lname" placeholder="Last name" />
                    </div>
                    <span id="lname_error" class="error"></span> 
                </div>
            </div>
            <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" name=email placeholder="Email address" />
                <span id="email_error" class="error"></span>
                
            </div>         

            <div class="row mb-4">
                <div class="col">
                <div class="form-outline">
                    <input type="text" maxlength="10" maxlength="10" ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" id="form3Example1" class="form-control" name="number" placeholder="Contact No"/>
                </div>
                <span id="number_error" class="error"></span>
                </div>
                <div class="col">
                <div class="form-group">
                    <select class="form-control" id="form3Example2" name="qualification">
                        <option value="">Select Qualification</option>
                        <option>B.Tech</option>
                        <option>M.Tech</option>
                        <option>Degree</option>
                        <option>MCA</option>
                        <option>MSC</option>
                        <option>BSC</option>
                        <option>Diploma</option>
                    </select>
                    <span id="qualification_error" class="error"></span>
                </div>
                
            </div>

            <div class="form-outline mb-4">
            <div class="form-group">
                    <select class="form-control" id="form3Example3" name="applyfor">
                    <option value="">Select Job Role</option>
                    <option>Software Developer Intern</option>
                    <option>Front End Developer</option>
                    <option>Full Stack Developer</option>
                    <option>Quality Assurance</option>
                    <option>Game Developer</option>
                    <option>.NET Developer</option>
                    <option>Android Developer</option>
                    <option>Java Developer</option>
                    <option>Python Developer</option>
                    </select>
                    <span id="apply_error" class="error"></span>
                </div>
                
                
            </div> 

            <div class="form-group">
                <div>
                    <input type="file" class="form-control-file" name="file" id="myFile" data-maxFileSize="2">
                    <span class="error" id="file_error"></span>
                </div>
            </div>
            
            
            
            
            <div class="text-center"><button class="btn btn-outline-white btn-success" id="submit" type="submit">Submit</button></div>
        </form>
        <span id="msg"></span>
    </div>

</section>

</body>

<script>
$(document).ready(function () {
    $("form#application_form").submit(function (event) {
        event.preventDefault();

        var form = $(this);
        var form_data = new FormData(form[0]);

        $.ajax({
            type: "POST",
            url: "internship_application_submit.php",
            data: form_data,
            processData: false,
            contentType: false,
            cache: false,
            dataType: "text",
        }).done(function (data) {
            $(".error").html("");

            if (data.trim() === "ok") {
                $("#status_message").html("<p style='color: green;'>Application submitted successfully!</p>");
                form[0].reset();
            } else if (data.trim() === "not") {
                $("#status_message").html("<p style='color: red;'>Application submission failed. Please try again!</p>");
            } else {
                form_errors = data.split('|');
                $.each(form_errors, function (key, value) {
                    if (value == "fname_miss") {
                        $("#fname_error").html("First Name is required");
                    }
                    if (value == "fname_format_miss") {
                        $("#fname_error").html("Only alphabets and white spaces are allowed");
                    }
                    if (value == "lname_miss") {
                        $("#lname_error").html("Last Name is required");
                    }
                    if (value == "lname_format_miss") {
                        $("#lname_error").html("Only alphabets and white spaces are allowed");
                    }
                    if (value == "email_miss") {
                        $("#email_error").html("Email is required");
                    }
                    if (value == "email_format_miss") {
                        $("#email_error").html("This is an invalid email");
                    }
                    if (value == "email_exists") {
                         $("#email_error").html("Email is already subscribed");
                    }
                    if (value == "number_miss") {
                        $("#number_error").html("Number is required");
                    }
                    if (value == "number_format_miss") {
                        $("#number_error").html("Only numbers are allowed");
                    }
                    if(value=="number_startformat_miss") {
                        $("#number_error").html("Mobile number should not start with 0");
                    }
                    if(value=="number_length_miss") {
                        $("#number_error").html("Mobile number must contain 10 digits");
                    }
                    if(value=="number_exists") {
                        $("#number_error").html("Mobile number is already in use");
                    }
                    if (value == "qualification_miss") {
                        $("#qualification_error").html("Please select a Qualification");
                    }
                    if (value == "apply_miss") {
                        $("#apply_error").html("Please select a Job Role");
                    }
                    if(value=="file_miss") {
                        $("#file_error").html("Resume is required");
                    }
                    if(value=="file_size_miss") {
                        $("#file_error").html("File max size is 2MB only");
                    }
                    if(value=="file_type_miss") {
                        $("#file_error").html("Please provide only docx or pdf file");
                    }
                    

                });
            }
        });
    });
});


</script>

<?php
    include_once 'include/footer.php';
?>