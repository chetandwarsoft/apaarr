<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*
if(isset($my_var))
{



}
else
{
$sql = "SELECT `id`, `uname`, `email`, `phone`, `year_of_crop`, `country`, `qty`, `out_turn_guarantee`, `nut_count`, `max_defective`, `max_moisture`, `other_particle`, `packing`, `loading`, `total_cashew`, `inspection`, `fob`, `cif`, `port_of_loading`, `shipment_month`, `payment_terms` FROM `apaarr_buyer` ORDER BY `id` DESC; ";

}

//echo   json_encode($result);
*/
$sql = "SELECT country,uname,port_of_loading,nut_count,qty,total_cashew,id FROM apaarr_buyer ORDER BY `id` DESC;";

$result = $conn->query($sql);
$data = array(); // create a variable to hold the information
while($row = $result->fetch_assoc()) {
  $data[] = $row;  
}
echo   json_encode($data);




$conn->close();
?>