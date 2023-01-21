<?php
 include('constants.php');
class eComm {

    public $host = HOST;
    public $user = USER;
    public $db = DB;
    public $password = PASSWORD;
    public $conn;
    public $key = KEY;
    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);
    }
    function login() {
       
        
    }

    function register() {
       
    }

    function userData() {
      
    }


}
?>