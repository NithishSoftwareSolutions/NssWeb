<?php
include_once '../config.php';

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
    // Validate and sanitize the form data
   
    $email = input_data($_POST['email']);
    

    
   

    // Validate 'email' field
    if (empty($_POST['email'])) {
        $return_messages[] = "email_miss";
    } else {
        $email = input_data($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $return_messages[] = "email_format_miss";
        }
        $emailquery = mysqli_query($conn, "select * from `footer_email_submit` where email='$email'");
              if(mysqli_num_rows($emailquery)>0) {
                $return_messages[] = 'email_exists';
              }
    }

  
    // For example, check if fields are empty or meet specific criteria

    // If there are no validation errors, insert data into the database
    if (empty($return_messages)) {
        // Sanitize and escape form data
       
        $email = mysqli_real_escape_string($conn, $email);
       



        // Insert data into the database
        $sql = "INSERT INTO footer_email_submit (email) 
                VALUES ('$email')";

        if (mysqli_query($conn, $sql)) {
            $return_messages[] = "ok"; // Success message
        } else {
            $return_messages[] = "not"; // Error message
        }
    }
}


// Return the result as a pipe-separated string
$return_message = implode("|", $return_messages);
echo trim($return_message);
?>
