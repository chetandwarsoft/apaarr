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


   $sql = "SELECT `id`, `uname`, `email`, `phone`, `year_of_crop`, `country`, `qty`, `out_turn_guarantee`, `nut_count`, `max_defective`, `max_moisture`, `other_particle`, `packing`, `loading`, `total_cashew`, `inspection`, `fob`, `cif`, `port_of_loading`, `shipment_month`, `payment_terms` FROM `apaarr_seller` WHERE id=$my_var";
$result = $conn->query($sql);
//echo   json_encode($result);

$data = array(); // create a variable to hold the information
while($row = $result->fetch_assoc()) {
  $data[] = $row;  
}
echo   json_encode($data);





$conn->close();
?>