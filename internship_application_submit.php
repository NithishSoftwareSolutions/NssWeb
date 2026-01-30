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
    // Validate and sanitize the form data
    $fname = input_data($_POST['fname']);
    $lname = input_data($_POST['lname']);
    $email = input_data($_POST['email']);
    $number = input_data($_POST['number']);
    $qualification = input_data($_POST['qualification']);
    $applyfor = input_data($_POST['applyfor']);

    // Add your validation logic for each field
    if (empty($fname)) {
        $return_messages[] = "fname_miss";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
        $return_messages[] = "fname_format_miss";
    }

    // Validate 'lname' field
    if (empty($lname)) {
        $return_messages[] = "lname_miss";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
        $return_messages[] = "lname_format_miss";
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

    // Validate 'number' field
    if (empty($number)) {
        $return_messages[] = "number_miss";
    } elseif (!is_numeric($number)) {
        $return_messages[] = "number_format_miss";
    }
    else {
        $number = input_data($_POST['number']);
        if(!preg_match("/^[0-9]*$/", $number)) {
            $return_messages[] = "number_format_miss";
        }
        else if(str_starts_with($number,"0")) {
            $return_messages[] = "number_startformat_miss";
            }
        else if(strlen($number) != 10) {
            $return_messages[] = "number_length_miss";
        }
        
    
        }
     // Validate 'qualification' field
     if (empty($qualification)) {
        $return_messages[] = "qualification_miss";
    }

     // Validate 'apply' field
    if (empty($applyfor)) {
        $return_messages[] = "apply_miss";
    }

    if ($_FILES['file']['name'] == "") {
        $return_messages[] = 'file_miss';
    } elseif ($_FILES['file']['size'] > 2 * 1024 * 1024) { // 2MB in bytes
        $return_messages[] = 'file_size_miss';
    } else {
        $ext = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
        if ($ext != 'docx' && $ext != 'pdf') {
            $return_messages[] = 'file_type_miss';
        } else {
            $targetDirectory = 'resume_uploads/'; // Specify the directory where you want to store the files
            $targetPath = $targetDirectory . basename($_FILES['file']['name']);
            
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {
                // File was successfully uploaded to the specified folder

                // Insert data into the database
                $sql = "INSERT INTO applications (fname, lname, email, number, qualification, applyfor, file) 
                        VALUES ('$fname', '$lname', '$email', '$number', '$qualification', '$applyfor', '$targetPath')";
                
                if (mysqli_query($conn, $sql)) {
                    $return_messages[] = "ok"; // Success message
                } else {
                    $return_messages[] = "not"; // Error message
                }
            } else {
                $return_messages[] = 'file_upload_error';
            }
        }
    }
    // For example, check if fields are empty or meet specific criteria

    // If there are no validation errors, insert data into the database
    if (empty($return_messages)) {
        // Sanitize and escape form data
        $fname = mysqli_real_escape_string($conn, $fname);
        $lname = mysqli_real_escape_string($conn, $lname);
        $email = mysqli_real_escape_string($conn, $email);
        $number = mysqli_real_escape_string($conn, $number);
        $qualification = mysqli_real_escape_string($conn, $qualification);
        $applyfor = mysqli_real_escape_string($conn, $applyfor);
        $file = mysqli_real_escape_string($conn, $file);



        // Insert data into the database
        $sql = "INSERT INTO applications (fname, lname, email, number, qualification,applyfor,file) 
                VALUES ('$fname', '$lname', '$email', '$number', '$qualification','$applyfor','$file')";

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
