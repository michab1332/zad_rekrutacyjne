<?php     
    class Database {
        private $host;
        private $user;
        private $password;
        private $my_db;

        function Database($host, $user, $password, $my_db) {
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->my_db = $my_db;
        }

        public function connect() {
            $mysqli = new mysqli($this->host, $this->user, $this->password, $this->my_db);
            if (mysqli_connect_errno()) {
                exit("Connect failed: ". mysqli_connect_error());
            } else {
                echo "Connect aproffed: " . $this->my_db;
            }
        }
    }
?>