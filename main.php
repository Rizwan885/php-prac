<?php
 $conn=mysqli_connect('localhost','root','Admin123**','spatieprac') or die('Connection Failedddd');
//  $sql="select id,title from posts";
//  $result=mysqli_query($conn,$sql);
 
//  $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
//  $jsondata=json_encode($output,JSON_PRETTY_PRINT);
// $filename="myfile".date('d-m-Y').".json";
//  if(file_put_contents("json/{$filename}",$jsondata))
//  {
//     echo $filename."File Created";
//  }
//  else
//  {
//     echo "cannot insert data";
//  }

// $name=$_POST['firstname'];

// if($name !=null)
// {
// $currentfile=file_get_contents('json/student-data.json');
// //converting to array for append data
// $array_fiel_data=json_decode($currentfile,true);

// $formdata=array("name"=>$name);
// $arraydata[]=$formdata;
// $json_data=json_encode($arraydata,JSON_PRETTY_PRINT);
// if(file_put_contents('json/student-data.json',$json_data))
// {
//     echo "File saved";
// }
// else
// {
//     echo "Not saved";
// }
// }
// else
// {
//     echo "name required";
// }
// $id=$_POST['id'];
$id=$_POST['id'];

 $sql="select * from posts where id={$id}";
 $result=mysqli_query($conn,$sql);

 $records=mysqli_fetch_all($result,MYSQLI_ASSOC);

 $jsondata=json_encode($records,true);

 echo $jsondata;
if($_POST['pid'])
{
    $id=$_POST['pid'];
    $title=$_POST['title'];
    $sql="Update posts set title={$title} where id={$id}";
    if(mysqli_query($conn,$sql))
    {
       echo "updated";
    }
    else
    {
        echo "not updated";
    }
}
 

?>