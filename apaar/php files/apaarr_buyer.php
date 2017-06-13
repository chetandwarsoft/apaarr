<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);
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
if( $fob == true )
{
	$fob='t';
}
else
{
	$fob='f';
}
if( $cif == true )
{
	$cif='t';
}
else
{
	$cif='f';
}
date_default_timezone_set("Asia/Bangkok");
$datee=date("Y/m/d");

$sql = "INSERT INTO apaarr_buyer ( uname, email, phone, year_of_crop, country, qty, out_turn_guarantee , nut_count, max_defective, max_moisture, other_particle , packing , loading , total_cashew , inspection , fob, cif,  port_of_loading, shipment_month , payment_terms ) VALUES
('$username' , '$email', '$phone', '$yoc' , '$countryoforg', '$qtyreq', '$outturnguar', '$nutcount', '$maxdefect', '$maxmois', '$otherrpart', '$pack', '$loadin', $targetprice , '$inspect', '$fob', '$cif', '$preflan', '$shipmon', '$payter')";

$sql2 = "INSERT INTO apaarr_buyer_history ( uname, email, phone, year_of_crop, country, qty, out_turn_guarantee , nut_count, max_defective, max_moisture, other_particle , packing , loading , total_cashew , inspection , fob, cif,  port_of_loading, shipment_month , payment_terms ,postdate ,cashewtype) VALUES
('$username' , '$email', '$phone', '$yoc' , '$countryoforg', '$qtyreq', '$outturnguar', '$nutcount', '$maxdefect', '$maxmois', '$otherrpart', '$pack', '$loadin', $targetprice , '$inspect', '$fob', '$cif', '$preflan', '$shipmon', '$payter' , '$datee' , 'created')";



/*

\data string pattern;

var dataString = "name=" + name +"&email=" +email +"&phone="+ phone +"&yoc="+ yearofcrop +"&qtyreq=" + qtyreq + "&countryoforg=" + Countryoforigin + "&targetprice=" + targetprice + "&outurngurantee=" + outurngurantee + "&nutcount=" + nutcount +"&maxdefective" + maxdefective + "&maxmoist=" + maxmoisture + "&Othherparticles=" + Othherparticles + "&packing=" + Packing + "&loding=" + loading + "&inspection=" + Inspection + "&preflandport=" + preflandport + "&Shipmentmonth=" + Shipmentmonth + "&payterms=" + payterms + "&fob=" + fob + "&cif=" + CIF ; 
*/
if ($conn->query($sql) == TRUE) {
if ($conn->query($sql2) == TRUE) {

    echo "New record inserted successfully";}
else
{
echo "Error: " . $sql2 . "<br>" . $conn->error;
}
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
































