<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$myvar= $_GET['email'];
$sql = "SELECT * FROM `apaarr_seller` WHERE email =\"" . $myvar . "\" ORDER BY id DESC ; ";
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
                    $row['shipment_month'],'<button style="width :65px;" class="btn btn-primary btn-sm" onclick="deleteeawcashavailabilityrow(' . $row['id'] . ')" >Delete</button>' 
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