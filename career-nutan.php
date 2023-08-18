<!-- ======= Header ======= -->
<?php
        include_once 'include/header.php';
?>
 <section id="join">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="animate fadeInLeft three" >
                <h1>Join Our Team</h1>
                <h5>"Exciting opportunity for experienced professionals to join<br>our fast-growing startup!<br>We're seeking individuals with a proven track record in [relevant skills/industry].<br>Competitive compensation, innovative projects, and a dynamic work environment. Apply now and be part of our success story!"</h5>
                <button class="button button1">Know More</button>
            </div>
            </div>
            <div class="col-lg-6">
                <div class="animate fadeInRight four" >
                   <img src="assets/img/amico.PNG" alt=" "/>
                </div>
            </div>
        </div>
    </div>
    
 </section>

 <section id="opportunities">

    <div class="container-fluid">
        <h1>Some opportunities for you to explore</h1>
    </div>
           
 </section>


    <div class="container">
        <div class="row  g-3">
            <div class="col-lg-4">
              <div class="card">
               <!---- <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
                   alt="Hollywood Sign on The Hill" /> -->
                <div class="card-body">
                  <h3 class="card-title">UI/UX Developer</h3>
                  <h5>Job Description</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.
                  </p>
                <h5>Experience:2-4 Years</h5>
                <h5>Location: Visakhapatnam<h5>
                <h5>Work from office<h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
              <!----  <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top"
                   alt="Palm Springs Road" /> -->
                <div class="card-body">
                  <h3 class="card-title">Web Development</h3>
                  <h5>Job Description</h5>
                  <p class="card-text">
                    This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.
                  </p>
                  <h5>Experience:2-4 Years</h5>
                <h5>Location: Visakhapatnam<h5>
                <h5>Work from office<h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
             <!----   <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top"
                  alt="Los Angeles Skyscrapers" /> -->
                <div class="card-body">
                  <h3 class="card-title">Android Development</h3>
                  <h5>Job Description</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                    additional content.</p>
                <h5>Experience:2-4 Years</h5>
                <h5>Location: Visakhapatnam<h5>
                <h5>Work from office<h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
              <!---- <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
                  alt="Skyscrapers" /> -->
                <div class="card-body">
                  <h3 class="card-title">App Development</h3>
                  <p class="card-text">
                    <h5>Job Description</h5>
                    This is a longer card with supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <h5>Experience:2-4 Years</h5>
                <h5>Location: Visakhapatnam<h5>
                <h5>Work from office<h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
            <!----    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/046.webp" class="card-img-top"
                  alt="Skyscrapers" />-->
                <div class="card-body">
                  <h3 class="card-title">Digital Marketing</h3>
                  <p class="card-text">
                    <h5>Job Description</h5>
                    This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.
                  </p>
                  <h5>Experience:2-4 Years</h5>
                <h5>Location: Visakhapatnam<h5>
                <h5>Work from office<h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
             <!----   <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/050.webp" class="card-img-top"
                  alt="Skyscrapers" /> -->
                <div class="card-body">
                  <h3 class="card-title">Graphic Designer</h3>
                  <p class="card-text">
                    <h5>Job Description</h5>
                    This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.
                  </p>
                  <h5>Experience:2-4 Years</h5>
                <h5>Location: Visakhapatnam<h5>
                <h5>Work from office<h5>
                </div>
              </div>
            </div>
          </div>
    </div>
    <!-- Harshitha -->
    <section id="applybox" class="mt-5">
        <div class="container">  
          <div class="row">
            <div class="col-lg-6 mt-5"> 
                <div class="animate fadeInLeft three mx-5" >
                <div id="slider2">
                    <img class="Slides" src="assets/img/Property 1=Group 90.jpg" >
                    <img class="Slides" src="assets/img/Property 1=Group 91.jpg">
                    <img class="Slides" src="assets/img/Property 1=Group 92.jpg">
                    <img class="Slides" src="assets/img/Property 1=Group 93.jpg">
                
                    <script>
                        var myIndex = 0;
                        carousel();
                        
                        function carousel() {
                        var i;
                        var y = document.getElementsByClassName("Slides");
                        for (i = 0; i < y.length; i++) {
                        y[i].style.display = "none";
                        }
                        myIndex++;
                        if (myIndex > y.length) {myIndex = 1}
                        y[myIndex-1].style.display = "block";
                        setTimeout(carousel, 3000);
                        }
                    </script>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                
                <div class="animate fadeInRight four" >
                    <div class="apply_box">
                        <div class="container register-form bg_body mt-3 shadow p-3 mb-5 bg-white"> 
                            <div class="text-center mx-auto">
                                <button type="button" class="btn btn-info">Apply for Your Dream Job</button> 
                            </div>
                            <form name="test" id="contact_form" method="post" class="php-email-form w-100 mt-5" data-oas="fade-up" enctype="multipart/form-data"> 
                                <div class="form"> 
                                <span id="status_message"></span>
                                    <div class="form-content">  
                                        <div class="row">  
                                            <div class="col-md-6">  
                                                <div class="form-group">  
                                                    <input type="text" class="form-control rounded-0" name="firstname" placeholder="First Name" value="" />  
                                                    <span class="error" id="firstname_error"></span>
                                                </div>  
                                                
                                            </div>              
                                            <div class="col-md-6">  
                                                <div class="form-group">  
                                                    <input type="text" class="form-control rounded-0" name="lastname" placeholder="Last Name" value="" />
                                                    <span class="error" id="lastname_error"></span>
                                                </div>  
                                                
                                            </div>  
                                        </div>
                                        <div class="row">  
                                            <div class="col-md-6">  
                                                <div class="form-group">  
                                                    <input type="date" class="form-control rounded-0" name="dob" placeholder="" value="" />  
                                                    <span class="error" id="dob_error"></span>
                                                </div>  
                                                
                                            </div>              
                                            <div class="col-md-6">  
                                                <div class="form-group">  
                                                    <input type="text" maxlength="10" ondrop="return false;" onpaste="return false;" onkeypress="return event.charCode>=48 && event.charCode<=57" class="form-control rounded-0" name="mobileno" placeholder="Contact Number" value="" />
                                                    <span class="error" id="mobile_error"></span>
                                                </div>  
                                                
                                            </div>  
                                        </div>
                                        <div class="row">  
                                            <div class="col-md-12">  
                                                <div class="form-group">  
                                                    <input type="text" class="form-control rounded-0" name="email" placeholder="Your Email" value="" />    
                                                    <span class="error" id="email_error"></span>
                                                </div>  
                                                
                                            </div>            
                                        </div>
                                        <div class="row"> 
                                            <div class="col-md-6">  
                                                <div class="btn-group">
                                                        <select class="form-control form-select" aria-label="Default select example" name="poy">
                                                            <option selected>Pass Out Year</option>
                                                            <option>2023</option>
                                                            <option>2022</option>
                                                            <option>2021</option>
                                                            <option>2020</option>
                                                            <option>2019</option>
                                                            <option>2018</option>
                                                            <option>2017</option>
                                                            <option>2016</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                            <option>2008</option>
                                                            <option>2007</option>
                                                        </select>
                                                </div><span class="error" id="poy_error"></span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <select class="form-control form-select" aria-label="Default select example" name="qualification">
                                                            <option selected>Qualification</option>
                                                            <option>B.Tech</option>
                                                            <option>M.Tech</option>
                                                            <option>Degree</option>
                                                            <option>MCA</option>
                                                            <option>MSC</option>
                                                            <option>BSC</option>
                                                            <option>Diploma</option>
                                                        </select>
                                                </div><span class="error" id="qualification_error"></span>
                                            </div>
                                        </div>  

                                        <div class="row">  
                                            <div class="col-md-12 mt-2">  
                                                <div class="form-group">  
                                                    <label>Gender: </label>
                                                    <label>Male</label><input type="radio" class="radio" name="gender" value="male"/>  
                                                    <label>Female</label><input type="radio" class="radio" name="gender" value="female"/>  
                                                    <label>Other</label><input type="radio" class="radio" name="gender" value="other"/>  
                                                </div><span class="error" id="gender_error"></span> 
                                                
                                            </div>    

                                        </div>
                                        <div class="row"> 
                                            <div class="col-md-6">  
                                                <div class="btn-group">
                                                        <select class="form-control form-select" aria-label="Default select example" name="experience">
                                                            <option selected>Experience</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                        </select>
                                                </div><span class="error" id="experience_error"></span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <select class="form-control form-select" aria-label="Default select example" name="applyfor">
                                                            <option selected>Apply For</option>
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
                                                </div><span class="error" id="apply_error"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-4">
                                            <div>
                                                <input type="file" class="form-control-file" name="file" id="myFile" data-maxFileSize="2">
                                                <span class="error" id="file_error"></span>
                                            </div>
                                        </div>
                                    <div class="mt-4"> 
                                        <div class="text-center"> 
                                    <button type="submit" class="btn btn-warning align-items-center" id="submit"> Submit </button>  
                                    </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 


    <script>
$(document).ready(function () {
    $("form#contact_form").submit(function (event) {
        event.preventDefault();

        var c_form = $("#contact_form")[0];

        /*var formData = {
            name: $('#contact_form').find('input[name="name"]').val(),
            email: $('#contact_form').find('input[name="email"]').val(),
            subject: $('#contact_form').find('input[name="subject"]').val(),
            message: $('#contact_form').find('textarea[name="message"]').val()
        };*/

        var form_data = new FormData(c_form);
        
        
        $.ajax({
            type: "POST",
            url: "career_submit.php",
            data: form_data,
            processData: false,
            contentType: false,
            cache: false,
            dataType: "text",
        }).done(function (data) {
          $("#firstname_error").html("");
            $("#lastname_error").html("");
            $("#dob_error").html("");
            $("#mobile_error").html("");
            $("#email_error").html("");
            $("#poy_error").html("");
            $("#qualification_error").html("");
            $("#gender_error").html("");
            $("#experience_error").html("");
            $("#apply_error").html("");
            $("#file_error").html("");

            form_errors = data.split('|');

            if(data=="ok") {
                $("#status_message").html("<p style='color: green;'>Application sent successfully!</p>");
                $("form#contact_form")[0].reset();
            } else if(data=="not") {
                $("#status_message").html("<p style='color: red;'>Application sending failed. Please try again!</p>");
            } else if((form_errors[0]!="firstname_miss" || form_errors[1]!="lastname_miss" || form_errors[2]!="dob_miss" || form_errors[3]!="mobile_miss" || form_errors[4]!="email_miss" || form_errors[5]!="poy_miss" || form_errors[6]!="qualification_miss" || form_errors[7]!="gender_miss" || form_errors[8]!="experience_miss" || form_errors[9]!="apply_miss" || form_errors[10]!="file_miss") || (form_errors[0]=="firstname_miss" || form_errors[1]=="lastname_miss" || form_errors[2]=="dob_miss" || form_errors[3]=="mobile_miss" || form_errors[4]=="email_miss" || form_errors[5]=="poy_miss" || form_errors[6]=="qualification_miss" || form_errors[7]=="gender_miss" || form_errors[8]=="experience_miss" || form_errors[9]=="apply_miss" || form_errors[10]=="file_miss")){
                form_errors = data.split('|');
                $.each( form_errors, function( key, value ) {
                  if(value=="firstname_miss") {
                        $("#firstname_error").html("First Name is required");
                    }
                    if(value=="firstname_format_miss") {
                        $("#firstname_error").html("Only alphabets and white spaces are allowed");
                    }
                    if(value=="lastname_miss") {
                        $("#lastname_error").html("Last Name is required");
                    }
                    if(value=="lastname_format_miss") {
                        $("#lastname_error").html("Only alphabets and white spaces are allowed");
                    }
                    if(value=="dob_miss") {
                        $("#dob_error").html("Date of Birth is required");
                    }
                    if(value=="dob_eligible_miss") {
                        $("#dob_error").html("Only Eligible above 18 years old candidates");
                    }
                    if(value=="mobile_miss") {
                        $("#mobile_error").html("Mobile number is required");
                    }
                    if(value=="mobile_format_miss") {
                        $("#mobile_error").html("Only numeric value is allowed");
                    }
                    if(value=="mobile_startformat_miss") {
                        $("#mobile_error").html("Mobile number should not start with 0");
                    }
                    if(value=="mobile_length_miss") {
                        $("#mobile_error").html("Mobile number must contain 10 digits");
                    }
                    if(value=="mobile_exists") {
                        $("#mobile_error").html("mobileno is already in use");
                    }
                    if(value=="email_miss") {
                        $("#email_error").html("Email is required");
                    }
                    if(value=="email_exists") {
                        $("#email_error").html("Email is already subscribed");
                    }
                    if(value=="email_format_miss") {
                        $("#email_error").html("This is an invalid email");
                    }
                    if(value=="poy_miss") {
                        $("#poy_error").html("Please Select Pass Out Year");
                    }
                    if(value=="qualification_miss") {
                        $("#qualification_error").html("Please Select Qualification");
                    }
                    if(value=="gender_miss") {
                        $("#gender_error").html("Gender is required");
                    }
                    if(value=="experience_miss") {
                        $("#experience_error").html("Please select Experience");
                    }
                    if(value=="apply_miss") {
                        $("#apply_error").html("Please select for what you want to apply");
                    }
                    if(value=="file_miss") {
                        $("#file_error").html("resume is required");
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
    <!-- ======= Footer ======= -->
    <?php
        include_once 'include/footer.php';
    ?>