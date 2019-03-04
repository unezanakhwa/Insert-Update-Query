<html>
<head>
<title>Registration Form</title>
</head>
<body>
<h1>Student Records</h1>
<table border = "2">
<tr>
<th>Student Id</th>
<th>Student Name</th>
<th>Email Address</th>
<th>Student Address</th>
<th>Student Contact Number</th>
<th>Update Record</th>
</tr>
<?php
  $conn = mysqli_connect("localhost", "root", "", "php");
  $query= "SELECT * FROM register";
  $record = mysqli_query($conn,$query);
  while($data = mysqli_fetch_assoc($record))
{
	?>

<tr><td>
	<?php 
	echo $data['Id']; 
	?></td>
	<td>
	<?php 
	echo $data['name']; 
	?></td>
	<td>
	<?php 
	echo $data['email']; 
	?></td>
	<td>
	<?php 
	echo $data['address']; 
	?></td>
	<td>
	<?php 
	echo $data['contact']; 
	?></td>
	<td><a href="<?php echo "update.php?id=".$data['Id']; ?>">Edit</a></td></tr>
<?php
}
?>
</table>
</body>
</html>