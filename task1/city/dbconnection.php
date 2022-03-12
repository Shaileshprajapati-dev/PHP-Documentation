 <?php
$hostname = "localhost:3306";
$username = "root";
$password = "";
$dbname = "task1";

 $conn = mysqli_connect($hostname, $username, $password,$dbname);

 if ($conn)
 {
    echo "connection successfully";
 }
 else{
     echo "connection not successfully";
 }
 
?>