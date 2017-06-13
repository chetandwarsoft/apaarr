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
$sql = "SELECT  `id`, `uname`, `email`, `phone`, `country`, `type`, `max_defective`, `max_moisture`, `size`, `qandg`, `nslg`, `qty`, `price`, `packing`, `loading`, `inspection`, `fob`, `cif`, `port_of_loading`, `shipment_month`, `payment_terms` FROM apaarr_pbuyer ORDER BY id DESC; ";

}

//echo   json_encode($result);
*/
$sql = "SELECT country,uname,port_of_loading,qty,price,id FROM apaarr_pbuyer ORDER BY `id` DESC;";

$result = $conn->query($sql);
$data = array(); // create a variable to hold the information
while($row = $result->fetch_assoc()) {
  $data[] = $row;  
}
echo   json_encode($data);




$conn->close();
?>