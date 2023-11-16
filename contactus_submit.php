<?php
include_once 'config.php';

function input_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$return_messages = array();

$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate 'name' field
    if (empty($_POST['name'])) {
        $return_messages[] = "name_miss";
    } else {
        $name = input_data($_POST['name']);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $return_messages[] = "name_format_miss";
        }
    }

    // Validate 'email' field
    if (empty($_POST['email'])) {
        $return_messages[] = "email_miss";
    } else {
        $email = input_data($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $return_messages[] = "email_format_miss";
        }
        $emailquery = mysqli_query($conn, "select * from `contactus_details` where email='$email'");
        if(mysqli_num_rows($emailquery)>0) {
          $return_messages[] = 'email_exists';
        }
    }

    // Validate 'message' field
    if (empty($_POST['message'])) {
        $return_messages[] = "message_miss";
    }

    // If there are no validation errors, insert data into the database
    if (empty($return_messages)) {
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        // Insert data into the database
        $sql = "INSERT INTO contactus_details (name, email, message) VALUES ('$name', '$email', '$message')";

        if (mysqli_query($conn, $sql)) {
            $return_messages[] = "ok";
        } else {
            $return_messages[] = "not";
        }
    }
}

// Return the result as a pipe-separated string
$return_message = implode("|", $return_messages);
echo trim($return_message);
?>
