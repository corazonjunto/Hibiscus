<?php
$servername = "sql208.epizy.com";
$username = "epiz_22637870";
$password = "MY4WPN18rctKzS";
$dbname = "epiz_22637870_test";

// 建立 mysql 連線
$conn = new mysqli($servername, $username, $password, $dbname);
// 檢查連線, 如果錯誤的話中斷
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// SQL 描述句, 從 test 表格取出所有的資料
$sql = "SELECT * FROM test  ;";

// 執行 SQL 從既有的 Mysql 連線取得資料
$result = $conn->query($sql);

// 如果資料的行數 , 大於 0 的話, 表示有資料
if ($result->num_rows > 0) {
    // 有資料
    // 把所有的資料, 每row每row的取出來,  , 放在 $row 變數
    $i=0;
    $dataarray = array();
    while($row = $result->fetch_assoc()) {

        //$message_data = json_decode($row["message"]);
        //echo "<br> message data: <br>";
        //var_dump($message_data);    
/*
        if($message_data == NULL) {
            $message = 'test';
        }else{
            // $message = "帳號".$message_data['account']."密碼".$message_data['password'];    
            $message = $message_data;
        }
*/
        // 輸出給 table data
        $jsondata['data'][$i] =  array( $row["id"], $row["name"], "test"); 
        // var_dump($dataarray);


        $i=$i+1;
		// var_dump($row);
		//echo json_encode($row);
        // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["message"]. "<br>";
        // var_dump(json_decode($row["message"]));
    }
} else {
    // 沒有資料
    echo "0 results";
}

//var_dump($jsondata);

echo json_encode($jsondata);

//var_dump($data);


// 關閉連線
$conn->close();

?>