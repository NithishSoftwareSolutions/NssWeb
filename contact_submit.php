<?php
include_once 'config.php';

function input_data($data) {
    return htmlspecialchars(stripslashes(trim($data)));
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
    }

    if (empty($_POST['phoneno'])) {
        $return_messages[] = "phoneno_miss";
    } elseif (!preg_match('/^\d+$/', $_POST['phoneno'])) {
        $return_messages[] = "phoneno_invalid"; // Phone number contains non-digit characters
    } elseif (strlen($_POST['phoneno']) !== 10) {
        $return_messages[] = "phoneno_length"; // Phone number is not exactly 10 digits
    }

    // Validate 'requirement' field
    if (empty($_POST['message'])) {
        $return_messages[] = "message_miss";
    }

    // If there are no validation errors, insert data into the database
    if (empty($return_messages)) {
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $phoneno = mysqli_real_escape_string($conn, $_POST['phoneno']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        // Insert data into the database
        $sql = "INSERT INTO contact (name, email, phoneno,requirement) VALUES ('$name', '$email','$phoneno', '$message')";

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
