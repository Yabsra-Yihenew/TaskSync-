<?php
    class Model extends Db{
        protected function getUser($email,$pass){
            $stmt = "SELECT * FROM USER WHERE Email = '$email' AND Password = '$pass'";
            $result = $this->conn()->query($stmt);
            return $result;
        }

        protected function setUser($email,$fullName,$pass,$role){
            $stmt = "INSERT into USER (Email,FullName,Password,Role) values ('$email','$fullName','$pass','$role')";
            $result = $this->conn()->query($stmt);
            return "You are Registered!";
        }
        protected function UpdateUser($email,$fullName,$role){
            $stmt = "UPDATE  USER SET FullName = $fullName WHERE Email =";
            $result = $this->conn()->query($stmt);
            return "You are Registered!";
        }
    }

?>