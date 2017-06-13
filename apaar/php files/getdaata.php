<?php header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "chetan";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  
 $sql = "SELECT `id`, `email` FROM `apaarr_buyer` WHERE 1 ";
$result = mysqli_query($conn,$sql);
//echo   json_encode($result);

echo "<script>
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
";



echo '<table style="width:100%" id="myTable">
  <thead>
  <tr>
    <th>id</th>
    <th>email</th> 
  </tr>
  </thead>
  ';
  
while($row = mysqli_fetch_array($result)) {
   echo '
<tr>
<td>';
echo $row["id"];
echo '</td>';
echo '
<td>';
echo $row["email"];
echo '</td>
</tr>';
};
 
 echo '
  
</table>';

$conn->close();
?>