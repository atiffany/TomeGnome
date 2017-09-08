 <!--create user login page-->
<html>
<head>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "styles1.css">
</head>

<body>
  <div class = "wrapper">

<?php include("includes/header.html"); ?>


<h3>Create Your Profile</h3>

<form action = "createUser.php" method = "post">
  Name <input type = "text" id = "name" name = "name">
  Username <input type = "text" id = "username" name = "username">
  Password <input type = "text" id = "password" name = "password">
  <button type = "submit" class = "btn submit-btn" value = "Submit">
</form>


</div>
<?php include("includes/footer.html"); ?>
</body>
</html>
