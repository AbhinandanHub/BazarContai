<!-- if anyone try to access the cart page without login then iyt will redirect the user into login.php page  -->
<?php
if(!isset($_SESSION['auth']))
{
    redirect("login.php",'Login to continue');
}
?>