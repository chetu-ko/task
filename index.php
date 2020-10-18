<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<table>
<tr> 
   <th> Company Name </th>
   <th> Email </th>
   <th> Mobile </th>
   <th> Hr Name </th>
   <th> Address </th>
   <th> File </th>
   <th> password </th>
</tr>
<?php
$sql1 = "select * from register";
//$query = "select * from images";
$result=mysqli_query($conn,$sql1);
?>

<?php foreach ($result as $item): ?>

<tr>
<td><?php echo $item['Cname'] ; ?></td>
<td><?php echo $item['Email']; ?></td>
<td><?php echo $item['Mobile'] ; ?></td>
<td><?php echo $item['Hrname'] ; ?>  </td>
<td><?php echo $item['address']; ?> </td>
<!--<td><?php echo $item['image']; ?> </td>-->
<td>
<?php 
$image = $item['image'];
$image_src = "upload/".$image;
?>
<img src='<?php echo $image_src;  ?>' >  
</td>
<td><?php echo $item['password'] ;?></td>

</tr>

<?php endforeach; ?>
</table>
		
</body>
</html>