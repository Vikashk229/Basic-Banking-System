
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="basic-banking";

// connecting to database
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "";
    
}
else 
{
    echo '<script>alert("Not connected");</script>';
}
?>   