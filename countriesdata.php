<?php
$conn=mysqli_connect('localhost','root','Admin123**','cc') or die('Fialed to connect');
if($_POST['type']=='')
{
    $sql="select * from countries";

$result=mysqli_query($conn,$sql);

$str="";


while($row=mysqli_fetch_assoc($result))
{
    $str.="<option value={$row['id']}>{$row['name']}</option>";
}
echo $str;
}
elseif($_POST['type']=='stateData')
{

    $id=$_POST['id'];
    $sql1="select * from states where country_id={$id}";

    $result=mysqli_query($conn,$sql1);
    
    $str2="";
    while($row=mysqli_fetch_assoc($result))
    {
        $str2.="<option value={$row['id']}>{$row['sname']}</option>";
    }
    echo $str2;
}
else
{
    echo "No Record";
}


?>