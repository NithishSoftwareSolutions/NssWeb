<?php
include_once 'config.php';

function input_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$return_messages = array();

$conn = mysqli_connect(DB_HOST, DB_USERNAME,DB_PASSWORD, DB_DATABASE_NAME);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['name'])){
        $return_messages[] = "name_miss";
    }
    else {
        $name = input_data($_POST['name']);
        if(!preg_match("/^[a-zA-Z]*$/", $name)){
            $return_messages[] = "name_format_miss";
        }
    }
    if(empty($_POST['email'])) {
        $return_messages[] = "email_miss";
    } else {
        $email = input_data($_POST['email']);
        if(preg_match("/([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@*([\.])(com|co|co.in|org)/", $email)) {
            $emailquery = mysqli_query($conn, "select * from `contact_details` where email='$email'");
            if(mysqli_num_rows($emailquery)>0) {
                $return_messages[] = "email_exists";
            }
        } else {
            $return_messages[] = 'email_format_miss';
        }
    }
    if(empty($_POST['subject'])){
        $return_messages[] = "subject_miss";
    }
    if(empty($_POST['message'])){
        $return_messages[] = "message_miss";
    }
}

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message']) && (mysqli_num_rows($emailquery)==0) && preg_match("/([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@*([\.])(com|co|co.in|org)/", $email)) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost/NSS_New/action.php/user/contact");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, true);
    $data = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message']
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $return_messages[] = curl_exec($ch);
    curl_close($ch);
}

ob_clean();
$return_message = implode("|",$return_messages);
echo trim($return_message);
ob_end_flush();

exit;
?>