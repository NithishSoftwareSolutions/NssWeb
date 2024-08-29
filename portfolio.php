<?php
    include_once 'include/header.php';
    include_once 'config.php';
    error_reporting(0);
?>

<!-- <div
  class="bg-image p-5 text-center shadow-1-strong mb-5 text-white"
  style="background-image: url('assets/img/portfolio.png');height:400px;;"
> 
</div> -->
<div class="links" id="social-links">

    <!-- <ul class="list-unstyled mb-4">
        <li>
            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram fa-2x mb-2"
                    style="color: #d9d9d9;"></i></a>
        </li>
        <li>
            <a href="https://www.youtube.com"><i class="fa-brands fa-youtube fa-2x mb-2"
                    style="color: #d9d9d9;"></i></a>
        </li>
        <li>
            <a href="https://www.facebook.com"><i class="fa-brands fa-facebook fa-2x mb-2"
                    style="color: #d9d9d9;"></i></a>
        </li>
        <li>
            <a href="https://www.twitter.com"><i class="fa-brands fa-twitter fa-2x mb-2"
                    style="color: #d9d9d9;"></i></a>
        </li>
    </ul> -->

</div>

<img src="assets/img/portfolio1.png" class="img-fluid w-100" alt="...">

<section id="brands1">

    <div class="container-fluid justify-content-center">
        <div class="row">
            <div class="col"><a href="https://iott.co.in/" target="_blank"><img src="assets/img/Component 23.png"
                        alt="..." id="mainImage1"></a>
                <div id="related-content1" class="hidden">
                    <!-- <img src="assets/img/s1.png" alt="Related Image" class="img-fluid">    -->
                </div>
            </div>
            <div class="col"><a href="#" target="_blank"><img src="assets/img/Component 24.png" alt="..."
                        id="mainImage2"></a>
                <div id="related-content2" class="hidden">
                    <!-- <img src="assets/img/s2.png" alt="Related Image" class="img-fluid">    -->
                </div>
            </div>

            <div class="col"><a href="#" target="_blank"><img src="assets/img/sign-in.png" alt="..."
                        id="mainImage2"></a>
                <div id="related-content2" class="hidden">
                    <!-- <img src="assets/img/s2.png" alt="Related Image" class="img-fluid">    -->
                </div>
            </div>

            <div class="col"><a href="#" target="_blank"><img src="assets/img/waymaart.png" alt="..."
                        id="mainImage2"></a>
                <div id="related-content2" class="hidden">
                    <!-- <img src="assets/img/s2.png" alt="Related Image" class="img-fluid">    -->
                </div>
            </div>

            <div class="col"><a href="#" target="_blank"><img src="assets/img/waymoney.png" alt="..."
                        id="mainImage2"></a>
                <div id="related-content2" class="hidden">
                    <!-- <img src="assets/img/s2.png" alt="Related Image" class="img-fluid">    -->
                </div>
            </div>



        </div>
    </div>

</section>


<script>
    const mainImage1 = document.getElementById("mainImage1");
    const relatedContent1 = document.getElementById("related-content1");
    const mainImage2 = document.getElementById("mainImage2");
    const relatedContent2 = document.getElementById("related-content2");
    const mainImage3 = document.getElementById("mainImage3");
    const relatedContent3 = document.getElementById("related-content3");



    mainImage1.addEventListener("click", function () {
        toggleVisibility(relatedContent1);
    });

    mainImage2.addEventListener("click", function () {
        toggleVisibility(relatedContent2);
    });

    mainImage3.addEventListener("click", function () {
        toggleVisibility(relatedContent3);
    });



    function toggleVisibility(element) {
        if (element.style.display === "none" || element.style.display === "") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }

    const card = document.getElementById("cards1");
    const relatedContent = document.getElementById("related-content3");

    // Add a click event listener to the card
    card.addEventListener("click", function () {
        // Toggle the "hidden" class to show/hide the related content
        if (relatedContent.style.display === "none" || relatedContent.style.display === "") {
            relatedContent.style.display = "block";
        } else {
            relatedContent.style.display = "none";
        }
    });

    function checkScroll() {
        var socialLinks = document.getElementById("social-links");
        if (window.scrollY > 400) { // Adjust 500 to the desired scroll position where you want the div to disappear
            socialLinks.style.display = "none"; // Hide the div
        } else {
            socialLinks.style.display = "block"; // Show the div
        }
    }

    // Add a scroll event listener to call the checkScroll function when the user scrolls
    window.addEventListener("scroll", checkScroll);
</script>


<?php
    include_once 'include/footer.php';
?>