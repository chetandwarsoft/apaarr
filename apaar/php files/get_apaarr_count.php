<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$my_var=$_GET['q'];


$link = mysqli_connect('localhost', 'root', '', 'chetan');
$result = mysqli_query($link, "SELECT count(*) FROM `apaarr_buyer` where email ='$my_var'");
$row = mysqli_fetch_array($result);
$total = $row[0];
$result = mysqli_query($link, "SELECT count(*) FROM `apaarr_seller` where email ='$my_var'");
$row = mysqli_fetch_array($result);
$totals = $row[0];
$result = mysqli_query($link, "SELECT count(*) FROM `apaarr_pseller` where email ='$my_var'");
$row = mysqli_fetch_array($result);
$totalps = $row[0];
$result = mysqli_query($link, "SELECT count(*) FROM `apaarr_pbuyer` where email ='$my_var'");
$row = mysqli_fetch_array($result);
$totalpb = $row[0];
$totaloverall= $totalps + $totalpb + $totals + $total ;

$data = array('rawbuyercount' => $total, 'rawsellercount' => $totals, 'procbuyercount' => $totalpb, 'procsellercount' => $totalps,'total' => $totaloverall);
echo json_encode($data);

mysqli_close($link);
?>



