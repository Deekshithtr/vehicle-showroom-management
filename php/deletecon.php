<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "showroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$dlrid=$_POST['delete'];
// sql to delete a record
$sql = "DELETE FROM `dealer` WHERE dealerid='".$dlrid."' limit 1 ";

if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">alert("sucessfully deleted")</script>';
    include 'delete.php';
} 
else {
        echo '<script type="text/javascript">alert("error in deleting")</script>';
}

$conn->close();
?>