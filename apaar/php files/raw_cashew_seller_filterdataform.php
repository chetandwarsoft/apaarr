<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM `apaarr_seller` ";
if(isset($_POST['cropyear']))
{
$sql = $sql . "WHERE `year_of_crop` in(";
$values = $_POST['cropyear'];
foreach ($values as $a){
    $sql=$sql . $a . ",";

}

$sql=substr($sql, 0, -1);
$sql=$sql . ")" ;

}

if(isset($_POST['country']))
{
$sql = $sql . " and `country` in(";
$values = $_POST['country'];
foreach ($values as $a){
    $sql=$sql . $a . ",";

}

$sql=substr($sql, 0, -1);
$sql=$sql . " )" ;

}


if(isset($_POST['outturn']))
{
$sql = $sql . " and `out_turn_guarantee` in(";
$values = $_POST['outturn'];
foreach ($values as $a){
    $sql=$sql . $a . ",";

}

$sql=substr($sql, 0, -1);
$sql=$sql . " )" ;

}
if(isset($_POST['nutcount']))
{
$sql = $sql . " and `nut_count` in(";
$values = $_POST['nutcount'];
foreach ($values as $a){
    $sql=$sql . $a . ",";

}

$sql=substr($sql, 0, -1);
$sql=$sql . " )" ;

}

if(isset($_POST['price']))
{
$sql = $sql . " and `total_cashew` in(";
$values = $_POST['price'];
foreach ($values as $a){
    $sql=$sql . $a . ",";

}

$sql=substr($sql, 0, -1);
$sql=$sql . " )" ;

}

if(isset($_POST['quantity']))
{
$sql = $sql . " and `qty` in(";
$values = $_POST['quantity'];
foreach ($values as $a){
    $sql=$sql . $a . ",";

}

$sql=substr($sql, 0, -1);
$sql=$sql . " )" ;

}

$sql= $sql. "  ORDER BY ID DESC;";

$result = $conn->query($sql);
$data = array(); // create a variable to hold the information
if($result)
{
while($row = $result->fetch_assoc()) {
  $data[] = $row;  
}
}
echo   json_encode($data);

$conn->close();

?>

