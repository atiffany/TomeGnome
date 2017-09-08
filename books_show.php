<!DOCTYPE html>
<head>
<link rel = "stylesheet" href = "styles1.css">
</head>

<body>
  <?php include("includes/header.html");

    //create connection
    $conn = new mysqli ($dbHost, $dbUser, $dbPass);
    //test connection
    if($conn->connect_error){
      die("Could not connect: ".$conn->connect_error);
    }
    else {
      echo "Connected successfully\n";
    }

    //return data from table
    $sql = "SELECT title, author FROM booksIndex.books";
    $result = $conn->query($sql);

    if ($result->num_rows >= 0){
      //output data of each row
      while($row = $result->fetch_assoc()){
        echo "title: ".$row['title']." author: ".$row['author']."<br>";
      }
    }
    else {
      echo "Nope";
    }

    //close connection
    $conn->close();
   ?>

 </body>
 <?php include("includes/footer.html"); ?>
 </html>
