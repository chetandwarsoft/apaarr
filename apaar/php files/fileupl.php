<?php header('Access-Control-Allow-Origin: *');;
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);
$loc ="C:\\Users\\Elcot\\Desktop\\i am play\\imagedata\\";

	
$imgedata =$_FILES["image"]['tmp_name'];
$imgename = $_POST["hiddenregnos"];
$extension = ".jpg";
$imgsize = getimagesize($_FILES["image"]['tmp_name']);

if($imgsize == FALSE )
{ 
	echo "not an image ";
}
move_uploaded_file($imgedata,$loc .$imgename .$extension);
	$loc ="C:\\Users\\Elcot\\Desktop\\i am play\\sponsor\\";
$imgedata =$_FILES["imager"]['tmp_name'];
$imgename = $_POST["hiddenregnos"];
$extension = ".jpg";
$imgsize = getimagesize($_FILES["imager"]['tmp_name']);

if($imgsize == FALSE )
{ 
	echo "not an image ";
}
move_uploaded_file($imgedata,$loc .$imgename .$extension);







/*
/*
if(move_uploaded_file ( $_FILES["image"]['tmp_name'] , 'images/'.$imgename .$extension))
{
	echo "file uploaded";
}

/*
echo '<img src="' + $imgedata; + '"/>';
echo '<img src="data:image/png;base64,'.base64_encode($imagedata).'"/>';
$sql = "INSERT INTO `imagetablee` (`id`, `imagename`, `imagedata`) VALUES ('50', '$imgename', '$imgedata');";
if ($conn->query($sql) === TRUE) {
  
} else {
   
}

$conn->close();
*/


?>
