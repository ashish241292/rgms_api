<?php
/**
 * Description of Connect_db
 * This calss will help to stablish the connection with database
 * and provide some customize method to petforme the CURD operation
 * on database.
 * 
 * @author Ashish Kumar
 */

include '../include/globals.php';

class Connect_db {
    private $host = SERVER_HOST;
    private $port = SERVER_PORT;
    private $user = USER;
    private $password = PASSWORD;
    private $databbase = DATABASE_NAME;
    private $mysqliObj;
    public $status;
    public $resultSet;

    /*
     * Stablish database connection
     * @return
     */
    public function connect(){
        $this->mysqliObj = new mysqli($this->host, $this->user, $this->password, $this->database, $this->port);
        if(!$this->mysqliObj->errno) {
            $this->status = 1;
        } else {
            $this->status = 0;
            echo "Connection failed with error code ".$this->mysqliObj->errno.":".$this->mysqliObj->error;
        }
    }
    
    public function getDatabaseHandler(){
        return $this->mysqliObj;
    }

    private function executeQuery($query){
        $this->resultSet = $this->mysqliObj->query($query);
        return $this->resultSet;
    }
    
    public function update($updateQuery){
        return $this->executeQuery($updateQuery);
    }
    
    public function create($createQuery){
        return $this->executeQuery($createQueryQuery);
    }
    
    public function delete($deleteQuery){
        return $this->executeQuery($deleteQueryQuery);
    }
    
    public function fetchAssociativeData(){}
    
    public function rowCount(){}
    
    public function serverDetail (){}
    
}
