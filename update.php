<!Doctype html>
<html>
<head>
<title>Registration Form</title>
</head>
<body>
<h1>Update Form</h1>
<?php 
$id = $_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "php");
$query="Select * from register where Id='$id'";
$result=mysqli_query($conn,$query);
while($data=mysqli_fetch_array($result)){
?>
<form method="post" action="eidt.php">
<table>
<tr>
<td>Student Name:</td>
<td><input type="text" name="name" class="textInput" value="<?php echo $data['name'];?>">
<input type="hidden" name="Id" class="textInput" value="<?php echo $data['Id'];?>">
</td>
</tr>
<tr>
<td>Email Address:</td>
<td><input type="email" name="email" class="textInput" value="<?php echo $data['email'];?>"></td>
</tr>
<tr>
<td>Student Address:</td>
<td><input type="text" name="address" class="textInput" value="<?php echo $data['address'];?>"></td>
</tr>
<tr>
<td>Student Contact:</td>
<td><input type="text" name="number" class="textInput" value="<?php echo $data['contact'];?>"></td>
</tr>
<tr>
<td><input type="submit" name="submit_buttn" value="Update"></td>
</tr>
</table>
</form>
<?php }
?>
</body>
</html>