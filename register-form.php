<?php
// $user = $_POST('user');
// $email = $_POST('email');
// $txt = $_POST('message');
//
// if($_REQUEST("REQUEST_METHOD") == "POST"){
//    if (empty($user) || $user = ''){
//        echo "User is Empaty";
//     }else{
//        echo $user;
//    }
//    if (empty($email) || $email = ''){
//         echo "Email is Empaty";
//     }else{
//         echo $email;
//     }
//    if (empty($txt)  || $txt = ''){
//         echo "Message is Empaty";
//     }else{
//         echo $txt;
//     }
// }
//

$_SERVER['REQUEST_METHOD']  = "POST";

$user = $_POST['name'];
$email = $_POST['email'];
$txt = $_POST['message'];
$number = $_POST['number'];
$sub = $_POST['sub'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "test2";

try {
        $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $datas = $conn->prepare("INSERT INTO testcolumn(user , email, message,number) VALUES ('$user', '$email','$txt', '$number')");

    $datas->execute();
        echo "Connected SuccessFully" . '<br>';
    }
    catch(PDOException $e){
    echo "Connection Failed: " . $e->getMessage();
}
?>
<?php

$email = $_POST['email'];
function valid_email($val)
{
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $val)) ? FALSE : TRUE;
}

if (!valid_email($email)) {
    echo "Invalid email addressss." . '<br>';
} else {
    echo "Valid email address." . '<br>';
}

$number = $_POST['number'];
function valid_number($num){
    return (!preg_match("^(\+98|0)?9\d{9}$" , $num)) ? FALSE : TRUE;
}
if (!valid_number($number)) {
    echo "Invalid number address." . '<br>';
} else {
    echo "Valid number address." . '<br>';
}



