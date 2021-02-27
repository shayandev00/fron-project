<?php
session_start();

//Invalid valible
$username = '';
$email = '';
$errors = array();

//Conect to db
$db = mysqli_connect('localost','root','','test2') or die("could not connect to Database");

//Register
$username = mysqli_real_escape_string('$db',$_POST['uesrname']);
$email = mysqli_real_escape_string('$db',$_POST['email']);
$password_1 = mysqli_real_escape_string('$db',$_POST['password_1']);
$password_2 = mysqli_real_escape_string('$db',$_POST['password_2']);

//Form_validate

if (empty($username)){
    array_push($errors,"Email is requred");
}
if (empty($email)){
    array_push($errors,"Email is requred");
}
if(empty($password_1)){
    array_push($errors, "Password is requred");
}
if($password_1 !=  $password_2){
    array_push($errors,"Password Does not match");
}

//Check username with same name

$user_check_query = "SELECT * FROM user WHERE uesrname = '$username' or $email = '$email' LIMIT 1 ";
$result = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($result);

if ($username) {
    if ($user['username'] === $username) {
        array_push($errors, "Username already exist");
    }
    if ($user['email'] === $email) {
        array_push($errors, "This Email already exist");
    }
}

//Register the user if no error

if (count($errors) === 0 ){
    $password = md5($password_1); //this weel encrypty the password
    $query = "INSERT INTO user (username, email,password) VALUES ('$username','$email','$password')";

    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

    header('location: blog.php');
}