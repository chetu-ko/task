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

if (isset($_POST['enter']))
{
    
    $name   = $_POST['Cname'];
    $Email  = $_POST['Email'];
    $Mobile = $_POST['Mobile'];
    $Hrname   = $_POST['Hrname'];
    $address  = $_POST['address'];
    $image = $_FILES['image']['name'];
    $password  = $_POST['password'];
    $password_encrypt = md5($password);
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["image"]);

    $query = "INSERT INTO register (Cname, Email, Mobile, Hrname, address, image, password )
    VALUES ('$name', '$Email', '$Mobile', '$Hrname','$address','$image','$password_encrypt')";
    mysqli_query($conn, $query);

    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$image);
    header('location: index.php');

}

?> 