<?php
  $conn = mysqli_connect("localhost", "root", "", "php");
    $Id = $_POST['Id'];
	$sname=$_POST["name"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $contact=$_POST["number"];
  $query="UPDATE register SET name ='$sname',email ='$email',address ='$address', contact='$contact' WHERE Id ='$Id'"; 
  mysqli_query($conn,$query);
  if(mysqli_query($conn,$query))
  { 
    echo "Record was updated successfully."; 
 } 
  else { 
    echo "ERROR.";
}  

header('Location:student.php');
	?>