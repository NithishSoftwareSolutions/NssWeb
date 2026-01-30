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

    // if (empty($_POST['contact'])) {
    //     $return_messages[] = "contact_miss";
    // }

    // Validate 'requirement' field
    if (empty($_POST['requirement'])) {
        $return_messages[] = "requirement_miss";
    }

    // If there are no validation errors, insert data into the database
    if (empty($return_messages)) {
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $requirement = mysqli_real_escape_string($conn, $_POST['requirement']);

        // Insert data into the database
        $sql = "INSERT INTO contact (name, email, requirement) VALUES ('$name', '$email', '$requirement')";

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
