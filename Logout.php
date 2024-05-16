
<?php
session_start();
if($_SESSION['loggedin']===true){
    header('Location: Login.php');
    $_SESSION['loggedin']= false;
    session_destroy();
    exit;
}
?>