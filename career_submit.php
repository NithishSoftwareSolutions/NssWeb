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

    define('KB', 1024);
    define('MB', 1048576);
    define('GB', 1073741824);
    define('TB', 1099511627776);

    $app_result = "";
    $display_message = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['firstname'])){
            $return_messages[] = "firstname_miss";
        }
        else {
            $firstname = input_data($_POST['firstname']);
            if(!preg_match("/^[a-zA-Z]*$/", $firstname)){
                $return_messages[] = "firstname_format_miss";
            }
        }

        if(empty($_POST['lastname'])){
            $return_messages[] = "lastname_miss";
        }
        else {
            $lastname = input_data($_POST['lastname']);
            if(!preg_match("/^[a-zA-Z]*$/", $lastname)){
                $return_messages[] = "lastname_format_miss";
            }
        }

        if(empty($_POST['dob'])) {
            $return_messages[] = "dob_miss";
        } else {
            $dateofbirth = input_data($_POST['dob']);
            $dob = new DateTime($dateofbirth);
            $today = new DateTime('today');
            $age = $dob->diff($today)->y;
            if($age<18) {
                $return_messages[] = "dob_eligible_miss";
            }
            }


        if(empty($_POST['mobileno'])) {
            $return_messages[] = "mobile_miss";
        } else {
            $mobileno = input_data($_POST['mobileno']);
            if(!preg_match("/^[0-9]*$/", $mobileno)) {
                $return_messages[] = "mobile_format_miss";
            }
          else if(str_starts_with($mobileno,"0")) {
            $return_messages[] = "mobile_startformat_miss";
            }
            else if(strlen($mobileno) != 10) {
                $return_messages[] = "mobile_length_miss";
            }
            $mobilequery = mysqli_query($conn, "select * from `career_form` where mobileno='$mobileno'");
            if(mysqli_num_rows($mobilequery)>0) {
                $return_messages[] = "mobile_exists";
            }
        }

        if(empty($_POST['email'])) {
            $return_messages[] = "email_miss";
        } else {
               $email = input_data($_POST['email']);
                if(preg_match("/([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@*([\.])(com|co|co.in|org)/", $email)) {
              } else {
                $return_messages[] = "email_format_miss";
              }
              $emailquery = mysqli_query($conn, "select * from `career_form` where email='$email'");
              if(mysqli_num_rows($emailquery)>0) {
                $return_messages[] = 'email_exists';
              }
        }

        if($_POST['poy']=="Pass Out Year") {
            $return_messages[] = 'poy_miss';
        }

        if($_POST['qualification']=="Qualification") {
            $return_messages[] = 'qualification_miss';
        }

        if(!isset($_POST['gender'])) {
            $return_messages[] = 'gender_miss';
        } else {
            $gender = input_data($_POST['gender']);           
        }

        
        if($_POST['experience']=="Experience") {
            $return_messages[] = 'experience_miss';
        } 

        if($_POST['applyfor']=="Apply For") {
            $return_messages[] = 'apply_miss';
        } 

        $ext = "";
        if($_FILES['file']['name']=="") {
            $return_messages[] = 'file_miss';   
        } 
        elseif($_FILES['file']['size'] > 2*MB) {
            $return_messages[] = 'apply_size_miss';
        } else {
          $ext = strtolower(pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION));
          if($ext!='docx' && $ext != 'pdf') {
            $return_messages[] = 'apply_type_miss';
          }          
        }

        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['dob']) && $age>18 && !empty($_POST['mobileno']) && (strlen($mobileno) == 10) && (preg_match("/^[0-9]*$/", $mobileno)) && (!str_starts_with($mobileno,"0")) && (mysqli_num_rows($mobilequery)==0) && !empty($_POST['email']) && (preg_match("/([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@*([\.])(com|co|in)/", $email)) && (mysqli_num_rows($emailquery)==0) && ($_POST['poy']!="Pass Out Year") && ($_POST['qualification']!="Qualification") && isset($_POST['gender'])  && ($_POST['experience']!="Experience") && ($_POST['applyfor']!="Apply For") && (is_uploaded_file($_FILES['file']['tmp_name'])) && ($_FILES['file']['size'] < 2*MB) && ($ext=='docx' || $ext == 'pdf'))
        {
            $file=$_FILES['file']['name'];
            $file_uploaded = move_uploaded_file($_FILES['file']['tmp_name'],'career_upload/'.$file);
            if($file_uploaded) {
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, "http://localhost/NSS_New/action.php/user/career");
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
              curl_setopt($ch, CURLOPT_POST, true);
              $data = array(
                  'firstname' => $_POST['firstname'],
                  'lastname' => $_POST['lastname'],
                  'dob' => $_POST['dob'],
                  'mobileno' => $_POST['mobileno'],
                  'email' => $_POST['email'],
                  'poy' => $_POST['poy'],
                  'qualification' => $_POST['qualification'],
                  'gender' => $_POST['gender'],
                  'experience' => $_POST['experience'],
                  'applyfor' => $_POST['applyfor'],
                  'file' => $_FILES['file']['name']
              );
              curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
              $return_messages[] = curl_exec($ch);
              curl_close($ch);
            }
            
            // if(trim($app_result)=="ok") {
            //   $display_message = "<p style='color: green;'>Application submitted successfully!</p>";
            // } else {
            //   $display_message = "<p style='color: red;'>Application not submitted. Please submit again!</p>";
            // }
        }
    }
    ob_clean();
    $return_message = implode("|",$return_messages);
    echo trim($return_message);
    ob_end_flush();
    exit;
?>
