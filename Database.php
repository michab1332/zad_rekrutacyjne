<?php     
    class Database {
        private $host;
        private $user;
        private $password;
        private $my_db;
        private $db;

        //init variables 
        function Database($host, $user, $password, $my_db) {
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->my_db = $my_db;
        }

        //if connect aproffed then return db 
        public function connect() {
            $this->db = new mysqli($this->host, $this->user, $this->password, $this->my_db);
            
            if (mysqli_connect_errno()) {
                exit("Connect failed: ". mysqli_connect_error());
            } else {
                echo "Connect aproffed: " . $this->my_db;
                return $this->db;
            }
        }
    }
?>