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
$username=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$yoc=$_POST['yoc'];
$qtyreq=$_POST['qtyreq'];
$countryoforg=$_POST['countryoforg'];
$targetprice=$_POST['targetprice'];
$outturnguar=$_POST['outurngurantee'];
$maxdefect=$_POST['maxdefective'];
$nutcount=$_POST['nutcount'];
$maxmois=$_POST['maxmoist'];
$otherrpart=$_POST['Othherparticles'];
$pack=$_POST['packing'];
$loadin=$_POST['loding'];
$inspect=$_POST['inspection'];
$preflan=$_POST['preflandport'];
$shipmon=$_POST['Shipmentmonth'];
$payter=$_POST['payterms'];
$fob=$_POST['fob'];
$cif=$_POST['cif'];
$sql = "INSERT INTO apaarr_seller ( uname, email, phone, year_of_crop, country, qty, out_turn_guarantee , nut_count, max_defective, max_moisture, other_particle , packing , loading , total_cashew , inspection , fob, cif,  port_of_loading, shipment_month , payment_terms ) VALUES
('$username' , '$email', '$phone', '$yoc' , '$countryoforg', '$qtyreq', '$outturnguar', '$nutcount', '$maxdefect', '$maxmois', '$otherrpart', '$pack', '$loadin', '$targetprice' , '$inspect', '$fob', '$cif', '$preflan', '$shipmon', '$payter')";
if ($conn->query($sql) === TRUE) {
    echo "done";
} else {
    echo "Error inserting into table: " . $conn->error;
}



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