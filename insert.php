<?php
$name = $_POST['name'];
$email= $_POST['email'];
$subject=$_POST['subject'];
$message =$_POST['messsage'];
$con = mysqli_connect("localhost","root","","school");
$sql="INSERT INTO std (name,email,subject,message) values ('$name','$email','$subject','$message')";
$r=mysqli_query($con,$sql);
if($r){
    echo "feedback sent successfully";
}else{
    echo "error";
}
?>
