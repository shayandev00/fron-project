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

//VALUE of my input
    $user = $_POST('user');
    $email = $_POST('email');
    $txt = $_POST('message');
//Request to server. Localhost

// * $_REQUEST = new \http\Env\Request('Post', 'localhost');

//Header for location in post or sth

//  *  header("location: localhost/register-form.php");
    $url = 'http://localhost:8080/register-form.php';
    $curl = curl_init($url);
//     json

$json_data = array(
    'user' => $user,
    'email' => $email,
    'txt' => $txt
);
$jsonDataEncode = json_encode($json_data);

curl_setopt($curl,CURLOPT_POST,true);

$server_output = curl_exec($curl);

curl_close($curl);

if ($server_output == "OK"){
    echo "hey";
}else{
    echo "Error Shayan"; 
}
?>