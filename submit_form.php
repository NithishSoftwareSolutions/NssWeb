<?php
include_once 'config.php';

// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize_input($data) {
    global $conn; // Access database connection inside the function
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $conn->real_escape_string($data); // Escape special characters for use in an SQL statement
}

// Validate and sanitize input fields
if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['qualification']) && !empty($_POST['applyfor'])) {
    $fname = sanitize_input($_POST['fname']);
    $lname = sanitize_input($_POST['lname']);
    $email = sanitize_input($_POST['email']);
    $number = sanitize_input($_POST['number']);
    $qualification = sanitize_input($_POST['qualification']);
    $applyfor = sanitize_input($_POST['applyfor']);
} else {
    die("All fields are required.");
}

// Handle file upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Validate file upload
if ($_FILES["file"]["size"] > 2000000) {
    die("Sorry, your file is too large.");
    $uploadOk = 0;
}

if (!in_array($imageFileType, array("pdf", "doc", "docx"))) {
    die("Sorry, only PDF, DOC, DOCX files are allowed.");
    $uploadOk = 0;
}

// Check if file was uploaded successfully
if ($uploadOk == 1 && move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    $sql = "INSERT INTO applications (fname, lname, email, number, qualification, applyfor, file)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $fname, $lname, $email, $number, $qualification, $applyfor, $target_file);

    if ($stmt->execute()) {
        echo "Your form submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
} else {
    echo "Sorry, there was an error uploading your file.";
}

// Close database connection
$conn->close();
?>
