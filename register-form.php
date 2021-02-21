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
$sub = $_POST['sub'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "test2";
    echo 'reza';
    echo 'I love mamad kachal';
try {
        $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $datas = $conn->prepare("INSERT INTO testcolumn(user , email, message) VALUES ('$user', '$email','$txt')");

    $datas->execute();
        echo "Connected SuccessFully";
    }
    catch(PDOException $e){
    echo "Connection Failed: " . $e->getMessage();
}

?>


