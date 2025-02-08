<?php
include '../connection.php';


$adminEmail = $_POST['admin_email'];
$adminPassword =md5($_POST['admin_password']);// convert password in to binary value

$sqlQuery = "SELECT * FROM admin_table WHERE  admin_email = '$adminEmail' AND admin_password = '$adminPassword'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0)
{
    $adminRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $adminRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success"=>true,
            "adminData"=>$adminRecord[0],
        )
    );
    
}
else
{
    echo json_encode(array("success"=>false));
}

