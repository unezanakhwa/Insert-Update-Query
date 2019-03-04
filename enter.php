<?php
 $conn = mysqli_connect("localhost", "root", "", "php");
 $sname=$_POST["name"];
 $email=$_POST["email"];
 $address=$_POST["address"];
 $contact=$_POST["number"];
 $query="INSERT into register (name,email,address,contact) values ('$sname','$email','$address',$contact)";
mysqli_query($conn,$query);
header('Location:index.php');

?>
