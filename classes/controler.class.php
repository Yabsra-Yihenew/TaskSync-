<?php
class Controler extends Model {
    public function signup($email, $fullName, $pass, $role) {
        $data = $this->setUser($email, $fullName, $pass, $role);
        return $data;
    }

    public function Update($email, $fullName, $role) {
        $data = $this->UpdateUser($email, $fullName, $role);
        return $data;
    }

    public function login($email, $pass) {
        $data = $this->getUser($email, $pass);
    
        if ($data->num_rows > 0) {
            $user = $data->fetch_assoc();
            $_SESSION['loggedin']=true;
            // Check if the 'role' key exists in the user array
            if (isset($user['role'])) {
                $role = $user['role'];
                if ($role == 'Teacher') {
                    return true; 
                } elseif ($role == 'Student') {
                    return true; 
                } elseif ($role == 'Admin') {
                    return true;
                }
            }
    
            // 'role' key not found or invalid role
            return false; // Indicate login failure
        } else {
            // User does not exist
            return false; // Indicate login failure
        }
    }
    
}

?>
