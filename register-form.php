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

    $url = 'http://localhost:8080/front/register-form.php';
    $curl = curl_init($url);

//  json
    $json_data = array(
        'user' => $user,
        'email' => $email,
        'txt' => $txt
    );
//    $jsonDataEncode = json_encode($json_data);

    curl_setopt($curl,CURLOPT_POST,true);

    $server_output = curl_exec($curl);

    curl_close($curl);

    for($i = 0; $i = count($json_data); $i++){
        if(isset($_POST['sub'])){
            echo("User: " . $_POST['name'] . "<br />");
            echo("Email: " . $_POST['email'] . "<br />");
            echo("Text: ". $_POST['message'] . "<br />");
        }
        else{
            echo "Error Shayan";
          }
    break;
    }

