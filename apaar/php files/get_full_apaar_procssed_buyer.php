<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);
$my_var=$_GET['q'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


   $sql = "SELECT * FROM `apaarr_pbuyer` WHERE id=$my_var";
$result = $conn->query($sql);
//echo   json_encode($result);

$data = array(); // create a variable to hold the information
while($row = $result->fetch_assoc()) {
  $data[] = $row;  
}
echo   json_encode($data);





$conn->close();
?>