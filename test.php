<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$servername = "localhost";
$username = "techsqje_tech007";
$password = "techgeekdb";
$dbname = "techsqje_techsolutions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, Value FROM inspiringquotes order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$counter = 1;
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $counter. " - Text: ". $row["Value"]. "<br>";
		  $counter++;
     }
} else {
     echo "0 results";
}

$conn->close();
?>  


<body>
</body>
</html>