<?php

include 'config.php';

$sel = mysqli_query($con,"insert into register values ('Jagmohan', 'Jag', 7004, 'j@gmail.com', '1234', '1234', 'Jamshedpur')");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
    $data[] = array("fname"=>$row['fname'],"lname"=>$row['lname'],"username"=>$row['username']);
}

echo json_encode($data);
