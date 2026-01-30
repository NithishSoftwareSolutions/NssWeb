<section class="py-5 imge_i">
    <div class="container imge12">
        <div id="teamCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php
include_once 'include/header.php';
include_once 'config.php';

// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

                // Query to fetch team members
                $sql = "SELECT * FROM in_reviews";
                $result = $conn->query($sql);

                // Check if there are results
                if ($result->num_rows > 0) {
                    // Initialize active flag for first carousel item
                    $active = true;

                    // Loop through each team member
                    while($row = $result->fetch_assoc()) {
                        $image_src = "images/" . $row["image_path"] . ".png";
                        $name = htmlspecialchars($row["name"]);
                        $role = htmlspecialchars($row["role"]);

                        // Output carousel item with Bootstrap classes
                        echo '<div class="carousel-item ' . ($active ? 'active' : '') . '">
                                <div class="row">';

                        echo '<div class="col-12 col-sm-6 col-md-4 team-member">
                                <img src="' . $image_src . '" alt="' . $name . '" class="img-fluid inimge">
                                <h4>' . $name . '</h4>
                                <p>' . $role . '</p>
                              </div>';

                        echo '</div></div>';

                        // Only first item should have active class
                        $active = false;
                    }
                } else {
                    echo "No team members found";
                }

                // Close database connection
                $conn->close();
                ?>
            </div>

            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#teamCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#teamCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
