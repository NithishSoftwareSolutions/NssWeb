 <?php
class Database
{
    protected $connection = null;
	
    public function __construct()
    {
        try {
            $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
            if ( mysqli_connect_errno()) {
                throw new Exception("Could not connect to database.");   
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());   
        }			
    }
	
    
	
	
	
	public function add($query="",$params=[])
    {
        try {
			$stmt = $this->connection->prepare($query);
			$stmt->bind_param($params[0],...[$params[1],$params[2],$params[3],$params[4],$params[5],$params[6],$params[7],$params[8],$params[9],$params[10],$params[11]]);
			$stmt->execute();
            $result = $stmt->affected_rows;
            $stmt->close();
            return $result;
        } catch(Exception $e) {
            throw New Exception($e->getMessage());
        }
        return false;
    }

    public function career($query="",$params=[])
    {
        try {
			$stmt = $this->connection->prepare($query);
			$stmt->bind_param($params[0],...[$params[1],$params[2],$params[3],$params[4],$params[5],$params[6],$params[7],$params[8],$params[9],$params[10],$params[11]]);
			$stmt->execute();
            $result = $stmt->affected_rows;
            $stmt->close();
            return $result;
        } catch(Exception $e) {
            throw New Exception($e->getMessage());
        }
        return false;
    }

    public function addMessage($query="",$params=[])
    {
        try {
			$stmt = $this->connection->prepare($query);
			$stmt->bind_param($params[0],...[$params[1],$params[2],$params[3],$params[4]]);
			$stmt->execute();
            $result = $stmt->affected_rows;
            $stmt->close();
            return $result;
        } catch(Exception $e) {
            throw New Exception($e->getMessage());
        }
        return false;
    }

    private function executeStatement($query="",$params=[])
    {
        try {
            $stmt = $this->connection->prepare($query);
            if($stmt === false) {
                throw New Exception("Unable to do prepared statement: " . $query);
            }
            if($params) {
                $stmt->bind_param($params[0],$params[1]);
            }
            $stmt->execute();
			return $stmt;            
        } catch(Exception $e) {
           throw New Exception($e->getMessage());
        }	
    }
}


require_once 'Database.php';

class ContactForm {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function validate($name, $email, $requirement) {
        $errors = [];

        // Validate name
        if (empty($name)) {
            $errors['name_error'] = "Name is required";
        } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors['name_error'] = "Only alphabets and white spaces are allowed";
        }

        // Validate email
        if (empty($email)) {
            $errors['email_error'] = "Email is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email_error'] = "This is an invalid email";
        } else {
            // Check if email already exists
            if ($this->emailExists($email)) {
                $errors['email_error'] = "Email is already subscribed";
            }
        }

        // Validate requirement
        if (empty($requirement)) {
            $errors['requirement_error'] = "Requirement is required";
        }

        return $errors;
    }

    public function emailExists($email) {
        $query = "SELECT id FROM contacts WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function saveContact($name, $email, $requirement) {
        $query = "INSERT INTO contacts SET name = :name, email = :email, requirement = :requirement";
        $stmt = $this->conn->prepare($query);

        // sanitize
        $name = htmlspecialchars(strip_tags($name));
        $email = htmlspecialchars(strip_tags($email));
        $requirement = htmlspecialchars(strip_tags($requirement));

        // bind values
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':requirement', $requirement);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
