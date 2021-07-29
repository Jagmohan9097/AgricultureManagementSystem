<?php

include 'config.php';

$sel = mysqli_query($con,"select * from register");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
    $data[] = array("Name"=>$row['Name'],"lname"=>$row['lname'],"username"=>$row['username']);
}

echo json_encode($data);