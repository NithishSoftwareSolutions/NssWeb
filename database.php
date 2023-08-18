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

