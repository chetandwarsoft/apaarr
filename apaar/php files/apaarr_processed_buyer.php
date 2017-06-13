<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);


$username=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$qtyreq=$_POST['qtyreq'];
$targetprice=$_POST['targetprice'];
$raworg=$_POST['raworg'];
$preflan=$_POST['prefland'];
$type=$_POST['type'];
$size=$_POST['size'];
$maxdefect=$_POST['maxdefective'];
$maxmois=$_POST['maxmoist'];
$quality=$_POST['Othherparticles'];
$pack=$_POST['packing'];
$nslg=$_POST['nslg'];
$inspect=$_POST['inspection'];
$delivery=$_POST['delivery'];
$shipmon=$_POST['Shipmentmonth'];
$payter=$_POST['payterms'];
$fob=$_POST['fob'];
$cif=$_POST['cif'];



$sql = "INSERT INTO `apaarr_pbuyer` ( `uname`, `email`, `phone`, `country`, `type`, `max_defective`, `max_moisture`, `size`, `qandg`, `nslg`, `qty`, `price`, `packing`, `loading`, `inspection`, `fob`, `cif`, `port_of_loading`, `shipment_month`, `payment_terms`) VALUES ( '$username' , '$email', '$phone', '$raworg' , '$type', '$maxdefect', '$maxmois','$size','quality','$nslg', '$qtyreq', '$targetprice', '$pack', '$delivery', '$inspect', '$fob', '$cif', '$preflan', '$shipmon', '$payter')";










if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "hey";
$conn->close();
?>



























