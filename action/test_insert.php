<?php
var_dump($_POST);
echo "<br>";


$message['text'] = $_POST['account'];
$message['password'] = $_POST['password'];
$message['text'] = $_POST['name'];
$message['text'] = $_POST['sex'];
$message['email'] = $_POST['email'];
$message['text'] = $_POST['phonenumber'];
$message['text'] = $_POST['birthday'];
$message['text'] = $_POST['address'];
var_dump($message);
echo "<br>";

$message_json = json_encode($message);
var_dump($message_json);
echo "<br>";


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
$sql = "INSERT INTO `test` (`account`, `password`, `name`, `sex`, `email`, `phonenumber`, `birthday`,`address`) VALUES (NULL, '".$_POST['name']."', '".$message_json."');";
var_dump($sql);


$result = $conn->query($sql);
var_dump($result);

/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		var_dump($row);
		//echo json_encode($row);
        // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
*/

$conn->close();
?>