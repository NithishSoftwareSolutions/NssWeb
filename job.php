<?php
include_once 'include/loader.php';
include_once 'include/header.php';
include_once 'config.php';

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

$sql_names = "SELECT name, role FROM reviews";
$result_names = $conn->query($sql_names);

$names = array();
$roles = array();
if ($result_names->num_rows > 0) {
    while ($row = $result_names->fetch_assoc()) {
        $names[] = $row['name'];
        $roles[] = $row['role'];
    }
}
?>

<style>
   .ima{
    margin-top:5%;
   }
    .table-head {
        font-family: 'Bitter';
        background-color: #0C5FAB;
        margin-bottom: 0 !important;
        padding: 1%;
    }
    .circle-image {
    width: 150px; /* Adjust size as needed */
    height: 150px; /* Adjust size as needed */
    border-radius: 50%;
    overflow: hidden;
    display: inline-block;
}

.circle-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

    @media (max-width: 768px) {
        
        .ima{
            margin-top:10%;
        }
        .txt{
            font-size: 20px !important;
        }
    }
    @media (max-width: 426px) {
        .table-head {
            font-size: 25px;
        }
        .ima{
            margin-top:19%;
        }
        .txt{
            font-size: 13px !important;
        }
    }
    @media (max-width: 320px) {
        .rev{
            font-size:20px;
        }
        .ima{
            margin-top:25%;
        }
        .txt{
            font-size: 12px !important;
        }
    }
    @media (max-width: 2560px){
        /* .rev{
           
            font-size: 45px;
        } */
        .circle-image {
        width: 150px;
        height: 150px;
    }
    .circle-image img {
        width: 100%;
        height: auto;
    }
    .carousel-inner .carousel-item {
        min-height: 400px;
    }
    }
   
   
</style>

<div class="ima">
        <img src="assets/img/1022.png" class="img-fluid w-100" alt="...">
</div>
    <h2 class="text-center mt-4 mb-4 rev" style="font-family:bitter;">Reviews and Feedback</h2>

    <div id="reviewCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $numReviews = count($reviews);
            $numSlides = ceil($numReviews / 3);

            for ($i = 0; $i < $numSlides; $i++): ?>
                <div class="carousel-item<?php echo ($i === 0) ? ' active' : ''; ?>">
                    <div class="container">
                        <div class="row">
                            <?php
                            for ($j = 0; $j < 3; $j++):
                                $index = $i * 3 + $j;
                                if ($index >= $numReviews) {
                                    break;
                                }
                                $review = $reviews[$index];
                            ?>
     <div class="col-lg-4">
    <div class="text-center">
        <div class="card-body">
            <div class="position-relative">
                <img src="./assets/img/Rectangle325.png" class="w-100" alt="">
                <div class="position-absolute w-100 text-center text-white txt" style="top: 40%; transform: translateY(-50%); font-size:12px;font-family: 'Nunito';"><?php echo $review['comment']; ?></div>
            </div>
            <div class="circle-image">
                <img src="<?php echo $review['image_url']; ?>" alt="Review image">
            </div>
            <h5 class="font"><?php echo $review['name']; ?></h5>
            <p class="d-flex justify-content-center">
                <?php
                $rating = $review['rating'];
                for ($k = 1; $k <= 5; $k++) {
                    echo '<i class="fa' . ($k <= $rating ? 's' : 'r') . ' fa-star text-warning"></i>';
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
        <a class="carousel-control-prev" href="#reviewCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon rounded-circle" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#reviewCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon rounded-circle" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
                                            </div>
<?php
$recordsPerPage = 20;

$pageFullTime = isset($_GET['page_fulltime']) && is_numeric($_GET['page_fulltime']) ? $_GET['page_fulltime'] : 1;
$offsetFullTime = ($pageFullTime - 1) * $recordsPerPage;

$pageInternship = isset($_GET['page_internship']) && is_numeric($_GET['page_internship']) ? $_GET['page_internship'] : 1;
$offsetInternship = ($pageInternship - 1) * $recordsPerPage;

$pageTraining = isset($_GET['page_training']) && is_numeric($_GET['page_training']) ? $_GET['page_training'] : 1;
$offsetTraining = ($pageTraining - 1) * $recordsPerPage;
?>

<div class="container mt-5">
    <h2 class="text-white text-center table-head">Full-time Candidates</h2>
         <div class="table-responsive">
          <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Certificate</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT name, role, certificate FROM reviews WHERE role!='Trainee' LIMIT $offsetFullTime, $recordsPerPage";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $sno = $offsetFullTime + 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $sno . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["role"] . "</td>";
                        echo "<td><a href='" . $row["certificate"] . "' class='text-primary'>View Certificate</a></td>";
                        echo "</tr>";
                        $sno++;
                    }
                } else {
                    echo "<tr><td colspan='4'>No results found</td></tr>";
                }
                ?>
            </tbody>
        </table>
            </div>
    <ul class="pagination justify-content-center mt-4">
        <?php
        $sql = "SELECT COUNT(*) AS total FROM reviews";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $totalPages = ceil($row["total"] / $recordsPerPage);

        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li class='page-item " . ($pageFullTime == $i ? 'active' : '') . "'><a class='page-link' href='?page_fulltime=$i'>$i</a></li>";
        }
        ?>
    </ul>
</div>

<div class="container mt-5">
    <h2 class="text-white text-center py-2 table-head">Internship Candidates</h2>
    <div class="table-responsive">

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Certificate</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT name, role, certificate FROM in_reviews WHERE role!='Trainee' LIMIT $offsetInternship, $recordsPerPage";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $sno = $offsetInternship + 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $sno . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["role"] . "</td>";
                        echo "<td><a href='" . $row["certificate"] . "' class='text-primary'>View Certificate</a></td>";
                        echo "</tr>";
                        $sno++;
                    }
                } else {
                    echo "<tr><td colspan='4'>No results found</td></tr>";
                }
                ?>
            </tbody>
        </table>
            </div>
    <ul class="pagination justify-content-center mt-4">
        <?php
        $sql = "SELECT COUNT(*) AS total FROM in_reviews";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $totalPages = ceil($row["total"] / $recordsPerPage);

        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li class='page-item " . ($pageInternship == $i ? 'active' : '') . "'><a class='page-link' href='?page_internship=$i'>$i</a></li>";
        }
        ?>
    </ul>
</div>

<div class="container mt-5">
    <h2 class="text-white text-center py-2 table-head">Training Candidates</h2>
        <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Certificate</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT name, role, certificate FROM trainee_reviews LIMIT $offsetTraining, $recordsPerPage";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $sno = $offsetTraining + 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $sno . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["role"] . "</td>";
                        echo "<td><a href='" . $row["certificate"] . "' class='text-primary'>View Certificate</a></td>";
                        echo "</tr>";
                        $sno++;
                    }
                } else {
                    echo "<tr><td colspan='4'>No results found</td></tr>";
                }
                ?>
            </tbody>
        </table>
            </div>
    <ul class="pagination justify-content-center mt-4">
        <?php
        $sql = "SELECT COUNT(*) AS total FROM trainee_reviews";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $totalPages = ceil($row["total"] / $recordsPerPage);

        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<li class='page-item " . ($pageTraining == $i ? 'active' : '') . "'><a class='page-link' href='?page_training=$i'>$i</a></li>";
        }
        ?>
    </ul>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="path/to/owl.carousel.min.js"></script>
<?php
$conn->close();
include_once 'include/footer.php';
?>
