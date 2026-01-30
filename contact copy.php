<!-- ======= Header ======= -->
    <?php
        include_once 'include/header.php';
    ?>

<!-- ----------------contact section--------------- -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h4>Contact Us</h4>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box" data-aos="fade-up">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>Dwarakanagar 1st Lane, Ramraj Cotton Building, Visakhapatnam - 530016</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>nithishsoftwaresolutions@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>0891-</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <form id="contact_form" method="POST" role="form" class="php-email-form w-100" data-aos="fade-up" name="submit-to-google-sheet">
                        <div id='status_message'></div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                            <input type="text" class="form-control rounded-0" name="name" placeholder="Your Name" value="" />
                            <span id="name_error" class="error"></span>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control rounded-0" name="email" placeholder="Your Email" value="" />
                            <span id="email_error" class="error"></span>
                            </div>  
                        </div>
                        <div class="form-group mt-3">
                        <input type="text" class="form-control rounded-0" name="subject" placeholder="Subject">
                        <span id="subject_error" class="error"></span>
                        </div>
                        <div class="form-group mt-3">
                        <textarea class="form-control rounded-0" rows="5" name="message" placeholder="Message"></textarea>
                        <span id="message_error" class="error"></span>
                        </div>

                        <div class="text-center"><button id="submit" type="submit">Send Message</button></div>
                    </form>
                    <span id="msg"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->


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
            url: "contact_submit.php",
            data: form_data,
            processData: false,
            contentType: false,
            cache: false,
            dataType: "text",
        }).done(function (data) {
            $("#name_error").html("");
            $("#email_error").html("");
            $("#subject_error").html("");
            $("#message_error").html("");

            form_errors = data.split('|');

            if(data=="ok") {
                $("#status_message").html("<p style='color: green;'>Message sent successfully!</p>");
                $("form#contact_form")[0].reset();
            } else if(data=="not") {
                $("#status_message").html("<p style='color: red;'>Message sending failed. Please try again!</p>");
            } else if((form_errors[0]!="name_miss" || form_errors[1]!="email_miss" || form_errors[2]!="subject_miss" || form_errors[3]!="message_miss") || (form_errors[0]=="name_miss" || form_errors[1]=="email_miss" || form_errors[2]=="subject_miss" || form_errors[3]=="message_miss")){
                form_errors = data.split('|');
                $.each( form_errors, function( key, value ) {
                    if(value=="name_miss") {
                        $("#name_error").html("Name is required");
                    }
                    if(value=="name_format_miss") {
                        $("#name_error").html("Only alphabets and white spaces are allowed");
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
                    if(value=="subject_miss") {
                        $("#subject_error").html("Subject is required");
                    }
                    if(value=="message_miss") {
                        $("#message_error").html("Message is required");
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
