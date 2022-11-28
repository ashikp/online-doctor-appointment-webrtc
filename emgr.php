<?php
include 'class/Appointment.php';
$object = new Appointment;


if(isset($_GET['token'])){
    $token = $_GET['token'];
    echo $token;
//     $data = array(
//         ':token' => $token,
//         ':expire' => 20
//     );
//     $object->query = "INSERT INTO emgr (token, expire) VALUES (:token, :expire)";
//     $object->execute($data);
}


?>