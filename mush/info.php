<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection sucessful";
}else{
    echo "no connection";
}
mysqli_select_db($con,'data');
$name =$_POST['name'];
$email=$_post['email'];


$query ="insert into table (name,user)
values ('$name','$email')";

mysqli_query($con,$query);
echo "$query";
mysqli_query($con,$query);
header('location:first.php');

?>