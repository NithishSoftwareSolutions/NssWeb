 <?php
require_once PROJECT_ROOT_PATH . "/database.php";
class UserModel extends Database
{
    
	public function addUser($firstname, $lastname, $dob, $mobileno, $email, $poy, $qualifiation, $gender, $experience, $applyfor, $file)
    {
        return $this->add("INSERT INTO internship_form(firstname, lastname, dateofbirth, mobileno, email, poyear, qualification, gender, experience, applyfor, file) VALUES (?,?,?,?,?,?,?,?,?,?,?)", ["sssssississ",$firstname,$lastname,$dob,$mobileno,$email,$poy,$qualifiation,$gender,$experience,$applyfor,$file]);
    }

    public function addCareer($firstname, $lastname, $dob, $mobileno, $email, $poy, $qualifiation, $gender, $experience, $applyfor, $file)
    {
        return $this->career("INSERT INTO career_form(firstname, lastname, dateofbirth, mobileno, email, poyear, qualification, gender, experience, applyfor, file) VALUES (?,?,?,?,?,?,?,?,?,?,?)", ["sssssississ",$firstname,$lastname,$dob,$mobileno,$email,$poy,$qualifiation,$gender,$experience,$applyfor,$file]);
    }

    public function addContact($name,$email,$subject,$message)
    {
        return $this->addMessage("INSERT INTO contact_details(name,email,subject,message) VALUES (?,?,?,?)", ["ssss",$name,$email,$subject,$message]);
    }
    
}