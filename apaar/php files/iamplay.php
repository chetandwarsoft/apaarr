<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);
$tourname=$_POST['tourname'];
$venuename=$_POST['venuename'];
$tourorg=$_POST['tourorg'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$formattype=$_POST['formattype'];
$regfee=$_POST['regfee'];
$agegroup=$_POST['agegroup'];
$description=$_POST['description'];
$contactname=$_POST['contactname'];
$contactphone=$_POST['contactphone'];


$sql = "INSERT INTO `iamplay` (`tourname`, `venuename`, `tourorg`, `startdate`, `enddate`, `formattype`, `ageggroup`, `regfee`, `descript`, `contactname`, `contactphone`) VALUES ('$tourname', '$venuename', '$tourorg', '$startdate', '$enddate','$formattype', '$agegroup', '$regfee', '$description', '$contactname','$contactphone');";
if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
































