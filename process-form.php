<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $creditCard = $_POST['creditCard'];

    $logData = "$firstName,$lastName,$checkin,$checkout,$creditCard\n";

    $logFileName = uniqid() . ".log";
    $logFile = fopen($logFileName, "a");
    fwrite($logFile, $logData);
    fclose($logFile);
}
?>