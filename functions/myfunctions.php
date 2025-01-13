<!-- start: it is admin/category.php for  fetch the data from database and show into admin panal -->
<?php
session_start();
include('../config/dbcon.php');

function getAll($table) //line 6
{
    global $con;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query); //line 10
}

//End: it is admin/category.php for  fetch the data from database and show into admin panal

//start: fro edit-category.php
function getByID($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id='$id' ";
    return $query_run = mysqli_query($con, $query);
}
//End: fro edit-category.php


//Start: it is use to short the code of the adminMiddleWare.php page using function

//frontend category dynamic
function getAllActive($table) //line 6
{
    global $con;
    $query = "SELECT * FROM $table WHERE status='0'";
    return $query_run = mysqli_query($con, $query); //line 10
}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}

// End: it is use to short the code of the adminMiddleWare.php page using function 

function getAllOrders()
{
    global $con;
    // $query = "SELECT o.*, u.name FROM orders o, users u WHERE status='0' AND o.user_id=u.id ";
    $query = "SELECT * FROM orders WHERE status='0' ";

    return $query_run = mysqli_query($con, $query); //line 10
}

//order-history.php
function getOrderHistory()
{
    global $con;
    $query = "SELECT * FROM orders WHERE status!='0' ";

    return $query_run = mysqli_query($con, $query); //line 10
}

//Start: checking, the logged-in user's tracking number == items ordered tracking number is auth or not in admin panal
function checkTrackingNoValid($trackingNo)
{
    global $con;

    $query = "SELECT * FROM orders WHERE tracking_no='$trackingNo'";
    return mysqli_query($con, $query);

}
//End: checking, the logged-in user's tracking number == items ordered tracking number is auth or not


?>