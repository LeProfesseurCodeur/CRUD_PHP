<?php 

    Class Connection {
        private $server = "mysql:host=localhost;dbname=crud1";
        private $username = "root";
        private $password = "root";
        private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
        protected $conn;

        public function open(){
            try{
                $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
                return $this->conn;
            }
            catch (PDOException $e){
                echo "Il y a eu un problème avec la connexion" . $e->getMessage();
            }
    
       }
        public function close(){
            $this->conn = null;
        }
    }

?>