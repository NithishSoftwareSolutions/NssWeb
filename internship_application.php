<?php
include_once 'include/loader_new.php';
    include_once 'include/header.php';
    include_once 'config.php';
    error_reporting(0);
?>


<style>
    .sumbityour {
      font-weight: 600;
      font-family: 'Bitter', serif;
      font-size: 45px;
    }
    .areyou {
      margin-top: 20px;
      font-size: 18px;
    }
    .btnapply {
      margin-top: 30px;
      background-color: #007bff;
      color: white;
    }
    .error {
      color: red;
      font-size: 12px;
    }

    
    .recta {
display: none;
    
}

#form3Example5{
  height: calc(2.70em + 0.75rem + 2px) !important;
    background: #ffffff;
    font-family: 'Nunito';
    font-weight: 800;
    color: #808080;
    border: solid 1px #808080;
    border-radius: 5px;

}

#form3Example4{
  height: calc(2.70em + 0.75rem + 2px) !important;
    background: #ffffff;
    font-family: 'Nunito';
    font-weight: 800;
    color: #808080;
    border: solid 1px #808080;
    border-radius: 5px;

}

#form3Example6{

  height: calc(2.70em + 0.75rem + 2px) !important;
    background: #ffffff;
    font-family: 'Nunito';
    font-weight: 800;
    color: #808080;
    border: solid 1px #808080;
    border-radius: 5px;

}



.btn-apply{

  background-color: #004085 !important;
  color: #ffffff !important;
}
  </style>

  <img src="assets/img/1112.png" class="img-fluid w-100" alt="..." id="unique-page">

  <section class="text-center p-3">
    <div class="container">
      <h2 class="sumbityour">Submit Your Resume</h2>
      <p class="areyou">Are you a talented and resourceful professional who consistently adds value to your work? We would love to hear from you</p>
      <!-- <a href="#" class="btn btn-apply ">Apply Now</a> -->
    </div>
  </section>

  <section id="application-form" >
    <div class="container mt-5 mb-5 w-50" id="appliction_f">
      <form id="application_form" method="POST" enctype="multipart/form-data" class="php-email-form w-100" name="submit-to-google-sheet">
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form3Example1" class="form-control" name="fname" placeholder="First name*" />
            </div>
            <span id="fname_error" class="error"></span>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form3Example2" class="form-control" name="lname" placeholder="Last name*" />
            </div>
            <span id="lname_error" class="error"></span>
          </div>
        </div>
        <div class="form-outline mb-4">
          <input type="text" id="form3Example3" class="form-control" name="email" placeholder="Email address*" />
          <span id="email_error" class="error"></span>
        </div>
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" maxlength="10" ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" id="form3Example4" class="form-control" name="number" placeholder="Contact No*" />
            </div>
            <span id="number_error" class="error"></span>
          </div>
          <div class="col">
            <div class="form-group">
              <select class="form-control" id="form3Example5" name="qualification">
                <option value="">Select Qualification*</option>
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
        </div>
        <div class="form-outline mb-4">
          <div class="form-group">
            <select class="form-control" id="form3Example6" name="applyfor">
              <option value="">Select Job Role*</option>
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
        <div class="text-center">
          <button class="btn btn-outline-white btn-success" id="submit" type="submit">Submit</button>
        </div>
        <div id='status_message'></div>

      </form>
      <span id="msg"></span>
    </div>
  </section>
  
<script>
 jQuery(document).ready(function ($) {
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
                setTimeout(function() {
                            $("#status_message").html("");
                        }, 3000);
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