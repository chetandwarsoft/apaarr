<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT uname,country,id,nut_count,qty,total_cashew FROM apaarr_seller ORDER BY id DESC; ";
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
                    $row['uname'],
                    $row['id'],
                    $row['country'],
                    $row['nut_count'],
                    $row['qty']
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