<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "styles1.css">
</head>

<body>
  <div class = "wrapper">

<?php include("includes/header.html");

//connect to db
require "config.php";

//mysql_query($sqlApiAcess) OR DIE("error, insert query failed");
$name = $_POST["name"];

  //create a new user
  function newUser(){
    //accept data from user sign up page
    $name = $_POST["name"];
    $userId = $_POST["username"];
    $userPass = $_POST["password"];
    //add user to table of users
    $query = "INSERT INTO bookIndex.users(name, userId, userPass) VALUES ('$name', '$userId', '$userPass')";
    //check if data was entered
    $data = mysql_query($query) OR DIE(mysql_error());
    if($data){
      echo "Your registration is complete!";
    }
    else {
      echo "There seems to have been a problem creating your registration";
    }

  }

  //check to see if user is already registered
  function findUser(){
    $result= "SELECT * FROM bookIndex.users WHERE userId = '$_POST[username]'";
    if(mysql_num_rows($result)>=1){
      echo "This username is taken, please choose another";
    }
    else{
      echo "yaaa boi";
    }
  }

findUser();

//run appropriate functions for registration
  //signUp();

  //close connection
  mysql_close();
   ?>
</body>
<?php include("includes/footer.html"); ?>

</html>
