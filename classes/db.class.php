<?php
    class Db{
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $db = 'admin';

        public function conn(){
            $conn = new mysqli($this->host,$this->user,$this->password,$this->db);

            if($conn->connect_errno){
                return false;
            }
            else{
                return $conn;
            }
        }

    }
?>