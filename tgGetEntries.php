
<html>
<head>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "styles1.css">
</head>

<body>
  <div class = "wrapper">

<?php include("includes/header.html"); ?>


<!--create content to request data from php file -->
<form action = "seeBooks.php">
<h3>What Would You Like to See?</h3><br>
All Books
<input type="radio" name = "getAllBooks" value = "false"><br>
Some Books
<input type="radio" name = "getSomeBooks" value = false><br>

<input type = "submit" class = "btn submit-btn" value = "Submit">
</form>



</div>
<?php include("includes/footer.html"); ?>
</body>
</html>
