<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "styles1.css">
</head>

<body>
  <div class = "wrapper">

<?php include("includes/header.html");

  //create users
  $dbHost = "localhost";
  $dbUser = 'root';
  $dbPass = "TurtlePowerHouse";

    //create connection
    $conn = new mysqli ($dbHost, $dbUser, $dbPass);
    //test connection
    if($conn->connect_error){
      die("Could not connect: ".$conn->connect_error);
    }


    //return data from table
    $sql = "SELECT title, author FROM bookIndex.books";
    $result = $conn->query($sql);

    if ($result->num_rows >= 0){
      //create a table
      echo "<table><tr><th>Title</th><th>Author</th></tr>";
      //output data of each row
      while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row['title']."</td><td>".$row['author']."</td></tr>";
      }
      //close the table
      echo "</table>";
    }
    else {
      echo "Please enter a book you have read!";
    }

    //close connection
    $conn->close();
   ?>

 </div>
 </body>
<?php include("includes/footer.html"); ?>
</html>
