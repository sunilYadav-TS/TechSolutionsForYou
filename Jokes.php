<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

	
 	<title>Jokes</title>
 	<meta name="description" content="Life changing Inspirational quotes ,Quotes, funny videos,Jokes, Non-veg Jokes, Joeks in Hindi , tutorials - 2016 Manufacturer - techsolutionsforyou , techsolutions . " />
 	<meta name="keywords" content=" inspiring quotes ,Life changing Inspirational quotes ,Quotes, funny videos,Jokes, Non-veg Jokes, Joeks in Hindi , tutorials,Jokes in marathi" />

 	 <link rel="canonical" href="http://www.techsolutionsforyou.com" />

	<link rel="stylesheet" type="text/css" href="quotes.css">


	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1821914063958460"
     data-ad-slot="7088839235"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</head>

<body>
<div>
	<div id="mainFrame">
		<div id="menu" class="floatR">
			<ul>
				<li >
					<a href="index.php"  >Home</a>
				</li>
				<li>
					<a href="Inspiring_quotes.php" >Inspiring Quotes</a>
				</li>
				<li>
					<a href="Jokes.php" class="activeTab" >Jokes</a>
				</li>
				<li>
					<a href="Non_veg_Jokes.php" >Non-veg Jokes</a>
				</li>
				<li>
					<a href="Hindi_Jokes.php" >Hindi Jookes</a>
				</li>
				<li>
					<a href="Marathi_Jokes.php" >Marathi_Jokes</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="advertiseDivL" class="floatL">
		
	</div>
	

	<div id="mainContent" class="floatL">

	<div class="font16 margin10">
<?php
require 'dbconnection.php';
header( 'Content-Type: text/html; charset=utf-8' ); 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
// Change character set to utf8
mysqli_set_charset($conn,"utf8mb4"); 

$sql = "SELECT id, Value FROM jokes order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
	 $counter = 1;
     while($row = $result->fetch_assoc()) {
     echo "<div class='bindDiv margin10 marginTop20 spnTxt'>
				<span>" .$counter.".    ". $row["Value"]. "</span>
			</div>";
			
      $counter++;
         //echo "<br> id: ". $row["id"]. " - Text: ". $row["Value"]. "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?> 

	</div>

	</div>
	<div id="advertiseDivR" class="floatL">
		
	</div>

</div>
</body>
</html>