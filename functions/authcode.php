<!-- it is use for register.php and login.php advance validation using php -->

<?php

include('../config/dbcon.php');
include('myfunctions.php');

// Check if the form is submitted
if (isset($_POST['register_btn'])) {
    // Sanitize and fetch form input
    $name = mysqli_real_escape_string($con, $_POST['name']);    //here $name is database register table name. and 'name' is our input field name
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    
    // Save form values in session to retain them after redirect
    $_SESSION['form_data'] = $_POST;
    
    // Name empty check
    if (empty($name)) {
        $_SESSION['message'] = "Name field is required";
        header('Location: ../register.php');
        exit;
    }
    // Phone empty check
    if (empty($phone)) {
        $_SESSION['message'] = "Phone field is required";
        header('Location: ../register.php');
        exit;
    }
    // Email empty check
    if (empty($email)) {
        $_SESSION['message'] = "Email field is required";
        header('Location: ../register.php');
        exit;
    }
    // Email empty check
    if (empty($password)) {
        $_SESSION['message'] = "Password field is required";
        header('Location: ../register.php');
        exit;
    }
    // Email empty check
    if (empty($cpassword)) {
        $_SESSION['message'] = "Confirm Password field is required";
        header('Location: ../register.php');
        exit;
    }
    // Check if the email is already registered
    $check_email_query = "SELECT email FROM users WHERE email = '$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);
    if (mysqli_num_rows($check_email_query_run) > 0) {
        // Email already exists
        $_SESSION['message'] = "Email already registered";
        header('Location: ../register.php');
        exit;
    } else {
        // Check if passwords match
        if ($password === $cpassword) {
            // Insert user data into the database
            $insert_query = "INSERT INTO users (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";
            $insert_query_run = mysqli_query($con, $insert_query);
            if ($insert_query_run) {
                // Registration successful
                $_SESSION['message'] = "Registered Successfully";
                header('Location: ../login.php'); 
                exit;
            } else {
                // Database insertion failed
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../register.php');
                exit;
            }
        } else {
            // Passwords do not match
            $_SESSION['message'] = "Passwords do not match";
            header('Location: ../register.php');
            // exit;
        }
    }
}
// End register form validation php 


// start login form validation php 
elseif(isset($_POST['login_btn'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query= "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $login_query_run= mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0){
        $_SESSION['auth']= true;
        
        $userdata=mysqli_fetch_array($login_query_run);
        $userid=$userdata['id'];
        $username=$userdata['name']; //this name is database register tables 'name'
        $useremail=$userdata['email'];
        $role_as=$userdata['role_as'];  //only for admin login (2st line)

        $_SESSION['auth_user'] = [
            'user_id' => $userid, //only this line for, after login any user can add-to-cart
            'name'=>$username,
            'email'=>$useremail     // here $useremail is veriable
        ];

        $_SESSION['role_as'] =$role_as; //only for admin login (1st line (start))

        if($role_as==1){    //only for admin login (3st line)
            $_SESSION['message'] = "Welcome To Dashboard"; //only for admin login (4st line)
            header('Location: ../admin/index.php');   //only for admin login (5st line (end))
        }
        else{
            $_SESSION['message'] = "Logged In Successfully";
            header('Location: ../index.php');
        }

        // $_SESSION['message'] = "Logged In Successfully";
        // header('Location: ../index.php');


    }
    else{
        $_SESSION['message'] = "Invalid Credentials";
        header('Location: ../login.php');
    }
}
?>