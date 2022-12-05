<?php

$conn = mysqli_connect('localhost','root','','db2') or die('connection failed');

$result = mysqli_query($conn,"SELECT * FROM comments");

$data = array();
while($row = mysqli_fetch_assoc($result))
{
    $data[]=$row;
}

echo json_encode($data);
?>