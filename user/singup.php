<?php
include '../connection.php';

$userName = $_POST['user_name'];
$userEmail = $_POST['user_email'];
$userPassword =md5($_POST['user_password']);// convert password in to binary value

$sqlQuery = "INSERT INTO users_table SET user_name = '$userName', user_email = '$userEmail', user_password = '$userPassword'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}else
{
    echo json_encode(array("success"=>false));
}

