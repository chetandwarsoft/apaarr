<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";

$myvar= $_GET['email'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM `apaarr_buyer_history` WHERE email =\"" . $myvar . "\" ORDER BY `id` DESC";
$result = $conn->query($sql);
if ($conn->query($sql) == TRUE) {
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 if($result->num_rows > 0) {
            $json = array();
            while($row = $result->fetch_assoc()){
                /**  MAKE ARRAY NON ASSOCIATIVE **/
                if( $row['cashewtype'] == 'created')
                {
                    $activity = '<font color="green" size="2px">'. $row['cashewtype'] .' on </font><br><br>' .  '<font color="green" size="2px">'.   $row['postdate'] . '</font>';
                }
                else
                {
$activity = '<font color="red" size="2px">'. $row['cashewtype'] .' on </font><br><br>' .  '<font color="red" size="2px">'.   $row['postdate'] . '</font>';
                }
                $json[] = array(
$activity
                     ,
                    $row['year_of_crop'],
                    $row['country'],
                    $row['qty'],
                    $row['out_turn_guarantee'],
                    
$row['max_defective'],
                    $row['max_moisture'],
                    $row['other_particle'],
                    $row['packing'],
                    $row['loading'],
 $row['inspection'],
                    $row['payment_terms'],
                    $row['port_of_loading'],
                    $row['shipment_month'] 
                );
            };
            /*** MAKE RESPONSE HAVE 'aaData' ENTRY ****/
            $response = array();
            $response['success'] = true;
            $response['aaData'] = $json;
            echo json_encode($response);
 }
$conn->close();
?>