<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mekar";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, nama, username, password FROM users";
$result = $conn->query($sql);
$json = [];
$i = 1;
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$json[$i] = [
'id' => $row["id"],
'nama' => $row["nama"],
'username' => $row["username"],
'password' => $row["password"]

];
$i = $i + 1;
}
} else {
echo "0 results";
}
$conn->close();
$data = ['data' => $json];
header('Content-Type: application/json');
echo json_encode($data);
?>
