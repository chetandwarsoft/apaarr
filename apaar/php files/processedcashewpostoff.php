<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);
$loc ="C:\\Users\\Elcot\\Desktop\\apaar\\IMAGEDATA\\";	

$RandomAccountNumber = mt_rand(1, 99999);  

$imgedata =$_FILES["image"]['tmp_name'];
$imgename = $RandomAccountNumber;
$extension = ".jpg";
$imgsize = getimagesize($_FILES["image"]['tmp_name']);
$namer=$_POST['Name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$type=$_POST['type'];
$grade=$_POST['grade'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$validity=$_POST['validity'];
$croporigin=$_POST['croporigin'];
$processedat=$_POST['processedat'];
$tax=$_POST['tax'];
$maxdefect=$_POST['maxdefect'];
$maxmoist=$_POST['maxmoist'];
$qualityandgrad=$_POST['qualityandgrad'];
$nslgnlg=$_POST['nslgnlg'];
$packing=$_POST['packing'];
$deliveryloc=$_POST['deliveryloc'];
$payterm=$_POST['payterm'];
$inspection=$_POST['inspection'];



if($imgsize == FALSE )
{ 
	echo "not an image ";
}
$content = file_get_contents($imgedata);
    $content = addslashes($content);
move_uploaded_file($imgedata,$loc .$RandomAccountNumber .$extension);
  
$sql="INSERT INTO `apaarr_pseller` (`id`, `uname`, `email`, `phone`, `country`, `type`, `max_defective`, `max_moisture`, `size`, `qandg`, `nslg`, `qty`, `price`, `packing`, `loading`, `inspection`, `fob`, `cif`, `port_of_loading`, `shipment_month`, `payment_terms`, `img`, `taken`, `uploaded`, `imagename`) VALUES (NULL, '$namer', '$email', '$phone', '$croporigin', '$type', '$maxdefect', '$maxmoist', '12', '$qualityandgrad', '$nslgnlg', '$quantity', '12', '$packing', '12', '$inspection', '12', '12', '12', '12', '12',NULL, '12', '12', $RandomAccountNumber);";



if ($conn->query($sql) === TRUE) {
  echo "DONE !!! ";
} else {
echo "Error:" . $conn->error; 
}

$conn->close();


?>

