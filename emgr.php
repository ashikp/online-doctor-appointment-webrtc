<?php
include 'class/Appointment.php';
$object = new Appointment;


if(isset($_GET['token'])){
    $token = $_GET['token'];
    $object->query = "INSERT INTO emgr (token, expire) VALUES ('$token', '20')";
    $object->execute();
}


?>