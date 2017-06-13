<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);
$my_var=$_GET['id'];
$deleted = "deleted ";
date_default_timezone_set("Asia/Bangkok");
$datee=date("Y/m/d");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "select * FROM `apaarr_buyer` WHERE `id`= $my_var" ;

$result = $conn->query($sql);
$data = array(); // create a variable to hold the information
while($row = $result->fetch_assoc()) {

$uname=$row['uname'];
$email= $row['email'];
$phone=$row['phone'];
$year_of_crop =$row['year_of_crop'];
$country=$row['country'];
$qty=$row['qty'];
$outturn=$row['out_turn_guarantee'];
$nut=$row['nut_count'];
$maxdefect=$row['max_defective'];
$max_moisture=$row['max_moisture'];
$other_particle=$row['other_particle'];
$packing=$row['packing'];
$loading=$row['loading'];
$total_cashew=$row['total_cashew'];
$inspection=$row['inspection'];
$fob=$row['fob'];
$cif=$row['cif'];
$port_of_loading=$row['port_of_loading'];
$shipment_month=$row['shipment_month'];
$payment_terms=$row['payment_terms'];






$sql1= "INSERT INTO `apaarr_buyer_history` (`id`, `uname`, `email`, `phone`, `year_of_crop`, `country`, `qty`, `out_turn_guarantee`, `nut_count`, `max_defective`, `max_moisture`, `other_particle`, `packing`, `loading`, `total_cashew`, `inspection`, `fob`, `cif`, `port_of_loading`, `shipment_month`, `payment_terms`, `postdate`, `cashewtype`) VALUES (NULL, '$uname', '$email', '$phone', '$year_of_crop', '$country', '$qty', '$outturn', '$nut', '$maxdefect', '$max_moisture', '$other_particle', '$packing', '$loading', '$total_cashew', '$inspection', '$fob', '$cif', '$port_of_loading', '$shipment_month', '$payment_terms','$datee','$deleted')";





if($conn->query($sql1) == TRUE)
{

}
else
{
echo "Error: " . $sql1 . "<br>" . $conn->error;
}


  
}


$sql = "DELETE FROM `apaarr_buyer` WHERE `id`= $my_var" ;
if($conn->query($sql) == TRUE)
{
echo "deletion succesfull";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}




/*
$sql1= "INSERT INTO `apaarr_buyer` (`id`, `uname`, `email`, `phone`, `year_of_crop`, `country`, `qty`, `out_turn_guarantee`, `nut_count`, `max_defective`, `max_moisture`, `other_particle`, `packing`, `loading`, `total_cashew`, `inspection`, `fob`, `cif`, `port_of_loading`, `shipment_month`, `payment_terms`) VALUES (NULL, 'ppdddd', 'dddd@gmail.com', NULL, '2017', 'india', '23', '', '', '', '', '', '', '', '7', '', '', '', '', '', '')";



INSERT INTO `apaarr_buyer_history` (`id`, `uname`, `email`, `phone`, `year_of_crop`, `country`, `qty`, `out_turn_guarantee`, `nut_count`, `max_defective`, `max_moisture`, `other_particle`, `packing`, `loading`, `total_cashew`, `inspection`, `fob`, `cif`, `port_of_loading`, `shipment_month`, `payment_terms`, `postdate`, `cashewtype`) VALUES (NULL, '$row['uname']','$row['email']', $row['phone'], $row['year_of_crop'], '$row['country']', $row['qty'], '$row['out_turn_guarantee']','$row['nut_count']', '$row['max_defective']', '$row['max_moisture']', '$row['other_particle']', '$row['packing']','$row['loading']', $row['total_cashew'],'$row['inspection']','$row['fob']', '$row['cif']', '$row['port_of_loading']','$row['shipment_month']', '$row['payment_terms']', '$datee','$deleted');


$sql = "DELETE FROM `apaarr_buyer` WHERE `id`= $my_var" ;
if($conn->query($sq) == TRUE)
{
echo "deletion succesfull";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}

*/

$conn->close();
?>