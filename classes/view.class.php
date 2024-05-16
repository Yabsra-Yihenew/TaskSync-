<?php
class View extends Model {
    public function login($email, $pass) {
        $data = $this->getUser($email, $pass);
        while ($row = $data->fetch_assoc()) {
            if ($email === $row['Email'] && $pass === $row['Password']) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header('Location: AdminHome.php');
                exit();
            }
        }
        return 'Incorrect email or password';
    }
}
?>
