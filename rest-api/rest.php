<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include "config.php";
$sql="select * from posts ";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    $record=mysqli_fetch_all($result,MYSQLI_ASSOC);
    $jsondata=json_encode($record,JSON_PRETTY_PRINT);
    echo $jsondata;
}
else

{
    $error=array('Error'=>'No Record Found','status'=>404);
    http_response_code(404);
    echo json_encode($error);
}



?>