<!-- adminMiddleWare.php it is use for, when a normal user after login frontent website and then the user (not a admin) want to login admin panal through URL (localhost/project_file_name/admin/index.php) then this will prevent. and it redirect to the main frontent index.php page with a alart (You are not authorized to access this page) -->
<!--this adminMiddleWare.php file added into admin panal's header.php file (admin/includes/header.php); because we want to show the alart in top of the header-->
<?php
include('../functions/myfunctions.php');
if(isset($_SESSION['auth']))
{
    if($_SESSION['role_as'] != 1)   //==0
    {   
        redirect("../index.php","You are not authorized to access this page"); //this line is short code of bellow 2 lines using function functions/myfunctions.php
        // $_SESSION['message'] = "You are not authorized to access this page";
        // header('Location: ../index.php');
        
    }
}
else
{
    //when, without admin permission (means role_as = 0 in user database), anyone try to login into admin panal through URL chenging (like localhost/project_file_name/admin etc), then show unuthorized admin user.
    redirect("../login.php","Login to continue");   //this line is short code of bellow 2 lines using function functions/myfunctions.php
    // $_SESSION['message'] = "Login to continue";
    // header('Location: ../login.php');
}
?>