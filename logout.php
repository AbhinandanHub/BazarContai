

<?php
session_start();

    if(isset($_SESSION['auth']))
    {
        unset($_SESSION['auth']);
        unset($_SESSION['auth_user']);
        $_SESSION['message']= "Logged Out Successfully";
    }
    header('Location:index.php');
?>     


<!-- the logout button present in profile.php ad navbar.php files -->