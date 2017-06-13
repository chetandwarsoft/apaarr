<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);
$my_var=$_GET['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM `apaarr_pbuyer` WHERE `id`= $my_var" ;
if($conn->query($sql) == TRUE)
{
echo "deletion succesfull";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>