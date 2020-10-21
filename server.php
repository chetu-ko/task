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
    $password  = $_POST['password'];
    $password_encrypt = md5($password);
    
    $upload_dir = 'uploads'.DIRECTORY_SEPARATOR; 

    # FIle selecting and uploading 
   if(array_filter($_FILES['files']['name'])) { 
  
        // Loop through each file in files[] array 
        foreach ($_FILES['files']['tmp_name'] as $key => $value) { 
              
            $file_tmpname = $_FILES['files']['tmp_name'][$key]; 
            $file_name = $_FILES['files']['name'][$key]; 
            $file_size = $_FILES['files']['size'][$key]; 
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 

            $query = "INSERT INTO register (Cname, Email, Mobile, Hrname, address, image, password )
            VALUES ('$name', '$to_email', '$Mobile', '$Hrname','$address','$file_name','$password_encrypt')";
            mysqli_query($conn, $query);  
            header('location: index.php'); 
            // Set upload file path 
            $filepath = $upload_dir.$file_name;   
  
                // If file with name already exist then append time in 
                // front of name of the file to avoid overwriting of file 
               if(file_exists($filepath)) { 
                    $filepath = $upload_dir.time().$file_name; 
                      
                    if( move_uploaded_file($file_tmpname, $filepath)) { 
                        echo "{$file_name} successfully uploaded <br />"; 
                    }  
                    else {                      
                        echo "Error uploading {$file_name} <br />";  
                    } 
                } 
                else { 
                  
                    if( move_uploaded_file($file_tmpname, $filepath)) { 
                        echo "{$file_name} successfully uploaded <br />"; 
                    } 
                    else {                      
                        echo "Error uploading {$file_name} <br />";  
                    } 
                } 
            }    
        }
         
    
    #mail sending ................
    $subject = "Simple Email Test via PHP";
    $body = "Hi, This is test email send by PHP Script";
    $headers = "From: noreply@gmail.com";

     #mail sending cuntion and storing files in DB
     if (mail($to_email, $subject, $body, $headers)) {
       echo "Email successfully sent to $to_email...";    
     } else {
      echo "Email sending failed...";
     }
  }

?> 