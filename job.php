<?php
include_once 'include/header.php';
include_once 'config.php';
error_reporting(0);

// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);

$reviews = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
}
?>
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




<img src="assets/img/job1.png" class="img-fluid w-100" alt="...">

<h2 class="text-center mt-4 mb-4">Reviews and Feedback</h2>
<!-- Your HTML structure -->
<section class="review_section mb-5">
        <div id="reviewCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $numReviews = count($reviews);
                $numSlides = ceil($numReviews / 3); // Calculate the number of slides needed

                for ($i = 0; $i < $numSlides; $i++): ?>
                    <div class="carousel-item<?php echo ($i === 0) ? ' active' : ''; ?>">
                        <div class="container">
                            <div class="row">
                                <?php for ($j = 0; $j < 3; $j++): 
                                    $index = $i * 3 + $j;
                                    if ($index >= $numReviews) {
                                        break;
                                    }
                                    $review = $reviews[$index];
                                ?>
                                    <div class="col-lg-4">
                                        <div class="card h-100 text-center">
                                            <div class="card-body">
                                                <img class="card-img-top rounded-circle" src="<?php echo $review['image_path']; ?>" alt="image">
                                                <h5 class="card-title"><?php echo $review['name']; ?></h5>
                                                <p class="card-text"><?php echo $review['comment']; ?></p>
                                                <p class="card-text"> 
                                                    <?php
                                                    $rating = $review['rating'];
                                                    for ($k = 1; $k <= 5; $k++) {
                                                        if ($k <= $rating) {
                                                            echo '<i class="fas fa-star text-warning"></i>';
                                                        } else {
                                                            echo '<i class="far fa-star text-warning"></i>';
                                                        }
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>


            <a class="carousel-control-prev" href="#reviewCarousel" role="button" data-slide="prev" style="
            margin-left: -4%;
        ">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                <i class="fa-solid fa-circle-arrow-left fa-2x" style="color: #031D2C;"></i>
            </a>
            
            <a class="carousel-control-next" href="#reviewCarousel" role="button" data-slide="next" style="
            margin-right: -2%;
        ">>
                <span class="carousel-control-next-icon" ariahidden="true"></span>
                <span class="sr-only">Next</span>
                <i class="fa-solid fa-circle-arrow-right fa-2x" style="color: #031D2C;"></i>
            </a>

            <!-- Your carousel controls -->
            
        </div>
</section>
<?php
$conn->close();
?>
<h2 class="text-center">Apply For Internships</h2>

<section id="jobs">

<div class="container mt-5 mb-5 jobs_cards">
        <div class="row">
            <!-- First Column -->
            <div class="col-md-2 col-8 mb-3">
                <div class="card">
                <img src="assets/img/Android.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-white">
                    <h6>Role:App Developer</h6>
                    <h6>Qualification: Any Degree</h6>
                    <h6>Stipend:5000/-</h6>
                    <h6>Experience: 0-1 years</h6>
                    <a href="internship_application">
                    <button type="button" class="btn btn-outline-success btn-rounded" style="margin-left: 17%;">Apply Now</button></a>
                    </div>
                </div>
            </div>
            
            <!-- Second Column -->
            <div class="col-md-2 col-8 mb-3">
                <div class="card">
                <img src="assets/img/Ui.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-white">
                    <h6>Role: Web Developer</h6>
                    <h6>Qualification: Any Degree</h6>
                    <h6>Stipend:5000/-</h6>
                    <h6>Experience: 0-1 years</h6>
                    <a href="internship_application">
                    <button type="button" class="btn btn-outline-success btn-rounded" style="margin-left: 17%;">Apply Now</button></a>
                    </div>
                </div>
            </div>
            
            <!-- Third Column -->
            <div class="col-md-2 col-8 mb-3">
                <div class="card">
                <img src="assets/img/Android.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-white">
                    <h6>Role:UI/UX Developer</h6>
                    <h6>Qualification: Any Degree</h6>
                    <h6>Stipend:5000/-</h6>
                    <h6>Experience: 0-1 years</h6>
                    <a href="internship_application">
                    <button type="button" class="btn btn-outline-success btn-rounded" style="margin-left: 17%;">Apply Now</button></a>
                    </div>
                </div>
            </div>

        
            <div class="col-md-2 col-8 mb-3">
                <div class="card">
                <img src="assets/img/Ui.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-white">
                    <h6>Role:React Developer</h6>
                    <h6>Qualification: Any Degree</h6>
                    <h6>Stipend:5000/-</h6>
                    <h6>Experience: 0-1 years</h6>
                    <a href="internship_application">
                    <button type="button" class="btn btn-outline-success btn-rounded " style="margin-left: 17%;">Apply Now</button></a>
                    </div>
                </div>
            </div>

             
          <!--  <div class="col-md-2">
                <div class="card">
                <img src="assets/img/Android.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-white">
                    <h6>Role:App Developer</h6>
                    <h6>Qualification: Any Degree</h6>
                    <h6>Stipend:4000/-</h6>
                    <h6>Experience:2-3 years</h6>
                    <a href="internship_application.php">
                    <button type="button" class="btn btn-outline-success btn-rounded" style="margin-left: 17%;">Apply Now</button></a>
                    </div>
                </div>
            </div>

            
            <div class="col-md-2">
                <div class="card">
                <img src="assets/img/Ui.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-white">
                    <h6>Role:App Developer</h6>
                    <h6>Qualification: Any Degree</h6>
                    <h6>Stipend:4000/-</h6>
                    <h6>Experience:2-3 years</h6>
                    <a href="internship_application.php">
                    <button type="button" class="btn btn-outline-success btn-rounded" style="margin-left: 17%;">Apply Now</button></a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    
</section>
<script>
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



$(document).ready(function() {
    // Initialize the carousel
    $('#carouselMultiItemExample').carousel();

    // Handle manual slide events
    $('#carouselMultiItemExample').on('click', '[data-mdb-slide]', function (e) {
      e.preventDefault();
      const slideTo = $(this).data('mdb-slide');
      $('#carouselMultiItemExample').carousel(slideTo);
    });
  });
</script>


<?php
    include_once 'include/footer.php';
?>
<!-- Other sections of your code -->
