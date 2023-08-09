<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];

$con=new mysqli('localhost','root','','enquiry');

if($con)
{
    $sql="insert into `data`(name,email,phone,location)values('$name','$email','$phone','$location')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data insert successfully";
    }else{
        die(mysqli_error($con));
    }
}
else
{
    die(mysqli_error($con));
}
}
?>