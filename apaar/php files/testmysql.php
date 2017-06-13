<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    echo "done";
} else {
    echo "Error inserting into table: " . $conn->error;
}

$query = "SELECT * FROM apaarr_buyer";
     $res = mysql_query($query,$conn) or die("Query Not Executed " . mysql_error($connect));

$conn->close();
?>
































/*

//sql direct insert


$sql = "INSERT INTO apaarr_seller (id, uname, email, phone, year_of_crop, country, qty, out_turn_guarantee , nut_count, max_defective, max_moisture, other_particle , packing , loading , total_cashew , inspection , fob, cif,  port_of_loading, shipment_month , payment_terms ) VALUES
(11, 'ccc' , 'cc@gmail.com', '3455', '1995' , 'countryoforg', '55', 'y', '5', '55', '5', '5', 'tt', '555', 10 , 'yes', 't', 't', 'ggg', 'jab', 'ter')";
if ($conn->query($sql) === TRUE) {
    echo "done";
} else {
    echo "Error inserting into table: " . $conn->error;
}

*/