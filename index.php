<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    tr:hover {background-color: #ddd;}

th,tr,td{
border:2px solid black;
text-align:left;
text-style:Times New Roman;
border-color:black;
padding:1px 2px;
}
th{
background-color: #4CAF50;
}
header{
padding:30px;
background-color:#EEE;
}

table#t01 th {
    background-color: black;
    color: white;
}

table#t01 tr:nth-child(even) {
    background-color: #eee;
}
  </style>
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
<center>
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
<td><a href="uploads/<?php echo $item['image'] ?>" target="_blank">view file</a></td> 
</td>
<td><?php echo $item['password'] ;?></td>

</tr>

<?php endforeach; ?>
</table>
		</center>
</body>
</html>