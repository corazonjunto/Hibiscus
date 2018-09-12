<?php
$servername = "sql208.epizy.com";
$username = "epiz_22637870";
$password = "MY4WPN18rctKzS";
$dbname = "epiz_22637870_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// 從 test 取出資料
$sql = "SELECT * FROM test  ;";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		// var_dump($row);
		//echo json_encode($row);
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>