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
$sql = "SELECT * FROM `apaarr_pbuyer` WHERE email =\"" . $myvar . "\" ORDER BY id DESC ; ";
$result = $conn->query($sql);
if ($conn->query($sql) == TRUE) {
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 if($result->num_rows > 0) {
            $json = array();
            while($row = $result->fetch_assoc()){
                /**  MAKE ARRAY NON ASSOCIATIVE **/
                $json[] = array(

                   
                    $row['country'],
NULL,
                    $row['qty'],$row['size'],
                   
                    
$row['max_defective'],
                    $row['max_moisture'],
                    $row['qandg'],
                    $row['nslg'],         
 $row['inspection'],$row['price'],$row['packing'],$row['fob'],$row['cif'],$row['port_of_loading'],
                    $row['payment_terms'],
                    
                    $row['shipment_month'],'<button style="width :65px;" class="btn btn-primary btn-sm" onclick="deleteprocessedcashreqrow(' . $row['id'] . ')" >Delete</button>' 
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