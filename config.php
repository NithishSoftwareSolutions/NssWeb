<?php
// define("DB_HOST", "nssnew.cra47i5srn4m.ap-south-1.rds.amazonaws.com");
// define("DB_USERNAME", "admin");
// define("DB_PASSWORD", "ADMINNSSNSS");
// define("DB_DATABASE_NAME", "nss_form");

// define("DB_HOST", "nss.cfe88tamypry.ap-south-1.rds.amazonaws.com");
// define("DB_USERNAME", "admin");
// define("DB_PASSWORD", "ADMINNSS");
// define("DB_DATABASE_NAME", "nss_form");



// define("DB_HOST", "localhost");
// define("DB_USERNAME", "root");
// define("DB_PASSWORD", "NssAdmin@1929");
// define("DB_DATABASE_NAME", "nss");



define("DB_HOST", "localhost");
define("DB_USERNAME", "iott");
define("DB_PASSWORD", "New_3339");
define("DB_DATABASE_NAME", "test_nss");
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
