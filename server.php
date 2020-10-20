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
    $to_email  = $_POST['Email'];
    $Mobile = $_POST['Mobile'];
    $Hrname   = $_POST['Hrname'];
    $address  = $_POST['address'];
    $image = $_FILES['image']['name'];
    $password  = $_POST['password'];
    $password_encrypt = md5($password);
    $target_dir = "upload/";
    $target_file = $_FILES['image']['name'];
    //move_uploaded_file($target_file,$target_dir.$image);
    $subject = "Welcome";
    $body = "Hi, Thank you for visiting our site";
$headers = "From: noreply@gmail.com";


if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
    $query = "INSERT INTO register (Cname, Email, Mobile, Hrname, address, image, password )
    VALUES ('$name', '$to_email', '$Mobile', '$Hrname','$address','$image','$password_encrypt')";
    mysqli_query($conn, $query);  
     header('location: index.php');  
    
} else {
    echo "Email sending failed...";
}



}

?> 