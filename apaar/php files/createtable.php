<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   $sql = "CREATE TABLE IF NOT EXISTS `apaarr_buyer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `year_of_crop` int(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `out_turn_guarantee` varchar(10) NOT NULL,
  `nut_count` varchar(10) NOT NULL,
  `max_defective` varchar(10) NOT NULL,
  `max_moisture` varchar(10) NOT NULL,
  `other_particle` varchar(10) NOT NULL,
  `packing` varchar(100) NOT NULL,
  `loading` varchar(100) NOT NULL,
  `total_cashew` int(10) NOT NULL,
  `inspection` varchar(100) NOT NULL,
  `fob` varchar(2) NOT NULL,
  `cif` varchar(2) NOT NULL,
  `port_of_loading` varchar(50) NOT NULL,
  `shipment_month` varchar(50) NOT NULL,
  `payment_terms` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;";
if($result = $conn->query($sql))
{
echo "cool";
}


echo "Today is " . date("Y/m/d") . "<br>";


$conn->close();
?>