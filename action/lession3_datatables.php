<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Lession 3 DATATABLE 練習</title>


	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>


	
<script>	
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>	


  </head>

  <body>

<div class="container">
    
<h3>資料列表</h3>
<div class="container">
  <div class="row">
    <div class="col">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                </tr>
            </thead>
            <tbody>

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

        $row_data =  '
        <tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["name"].'</td>
        <td>'.$row["message"].'</td>
        </tr>
        ';
        echo $row_data;


    }
} else {
    echo "0 results";
}
$conn->close();

/*
for($i=0;$i<=10;$i++) {
    echo  $row_data;
}
*/


?>
 

            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                </tr>
            </tfoot>
        </table>

	
      </div>
  </div>
</div>

    
  <!-- Site footer -->
  <footer class="footer">
    <p>&copy; Company 2018</p>
  </footer>

</div> <!-- /container -->


  </body>
</html>
