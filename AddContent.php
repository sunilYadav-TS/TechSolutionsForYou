<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
header( 'Content-Type: text/html; charset=utf-8' );
$comment = "";
$category = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	//get comment value.
	if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  
  // get category
  if (empty($_POST["category"])) {
    $genderErr = "Category is required";
  } else {
    $category = test_input($_POST["category"]);
  }
  InsertIntoDB($category,$comment);
  
}

// function to trim and convert special characters .
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = addslashes($data);
  $data = nl2br($data);
  return $data;
}

function InsertIntoDB($category,$comment){
require 'dbconnection.php';

header( 'Content-Type: text/html; charset=utf8' ); 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Change character set to utf8
mysqli_set_charset($conn,"utf8mb4"); 

$sql = "INSERT INTO ".$category." (Value)
VALUES ('". $comment ."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
}

?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<div style="display:block">
Comment: <textarea name="comment" rows="10" cols="40"> <?php echo $comment;?></textarea>
</div>
<br />

<div style="display:block">
Category:

  <input type="radio" name="category" <?php if (isset($category) && $category=="InsQuotes") echo "checked";?> value="inspiringquotes">Inspiring_quotes
  
  <input type="radio" name="category" <?php if (isset($category) && $category=="Jokes") echo "checked";?> value="jokes">Jokes
  
  <input type="radio" name="category" <?php if (isset($category) && $category=="NonvegJokes") echo "checked";?> value="nonveg_jokes">Non-veg_Jokes
  
  <input type="radio" name="category" <?php if (isset($category) && $category=="HindiJokes") echo "checked";?> value="hindi_jokes">Hindi_Jokes
  
  <input type="radio" name="category" <?php if (isset($category) && $category=="MarathiJokes") echo "checked";?> value="marathi_jokes">Marathi_Jokes
</div>
<br />

<input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $comment;
echo "<br>";
echo $category;

?>
</body>
</html>