<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "styles1.css">
</head>

<body>
  <div class = "wrapper">

<?php include("includes/header.html"); 

$title = $_POST["title"];
$author = $_POST["author"];
$genre = $_POST["genre"];
$pubYear = $_POST["year"];

//determine if selection entered was fiction or nonfiction
$fiction = $_POST['ficNonFic'];
if ($fiction != 'true'){
        $fiction = 'false';
}

$ficNonFic;
if ($fiction == 'true'){
        $ficNonFic = 'Fiction';
}
else{
        $ficNonFic = 'NonFiction';
}

?>

<div class = "mainPage">
You read
<?php echo $title;?>
 by <?php echo $author;?>, the <?php echo $genre;?> novel published in <?php echo $pubYear ?>. <br>


<?php
//create users
require_once "config.php";

//create database
$sql = "CREATE DATABASE IF NOT EXISTS bookIndex";
//test for db set up
if ($conn->query($sql)===TRUE){
}
else{
        echo "Error creating database: ".$conn->error."\n";
}

//create table
$sql= "CREATE TABLE IF NOT EXISTS bookIndex.books(
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userId INT(30)/*NOT NULL*/,
title VARCHAR(255) NOT NULL,
author VARCHAR(255) NOT NULL,
ficNonFic VARCHAR(30),
genre VARCHAR(30)
)";

//test if table set up correctly
if($conn->query($sql)===TRUE){
}
else{
        echo "Error creating table: ".$conn->error."<br>";
}

//insert html data into the table
$sql = "INSERT INTO bookIndex.books (title, author, ficNonFic, genre)
VALUES ('$title', '$author', '$ficNonFic', '$genre')";


//check to see if it was created
if ($conn->query($sql)===TRUE){
} else{
        echo "Error: ".$sql."<br>".$conn->error."<br>";
}



//close connection
$conn->close();
?>
</div>
</body>
<?php include("includes/footer.html"); ?>
</html>
