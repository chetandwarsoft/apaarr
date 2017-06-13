<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   $sql = "SELECT uname,country,id,nut_count,qty,total_cashew FROM apaarr_seller ORDER BY id DESC; ";
$result = $conn->query($sql);
//echo   json_encode($result);

$data = array(); // create a variable to hold the information
while($row = $result->fetch_assoc()) {
  $data[] = $row;  
}
echo   json_encode($data);





$conn->close();
?>