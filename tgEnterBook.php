<html>
<head>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "styles1.css">
</head>

<body>
  <div class = "wrapper">

<?php include("includes/header.html"); ?>



What's the most recent book you've read?
<br>
<br>
<!--will send data to php file-->
<form action = "books_get.php" method = "post">
  <div class = "row options">
  <div class = "col-xs-4">
  Title <br>
  	<input type = "text" name = "title"><br>
    </div>
    <div class = "col-xs-4">
  Author <br>
  	<input type = "text" name = "author"><br>
    </div>
    <div class = "col-xs-4">
     Year Published<br>
  <input type = "text" name = "year"><br>
  </div>
  <br>
  </div>
  <br>

  <!--creates two radio buttons-->
  <div class = "dropdown">
  	NonFiction <input type = "radio" name = "ficNonFic" onclick = "myGenreHide()"><br>
  	Fiction <input type = "radio" name = "ficNonFic" onclick = "myGenre()">
    <br>

<!--creates a drop down menu visible if one of the two radio buttons is selected-->
  <div id = "myDropdown" class = "dropdown-content">
  <label for = "genre">Genre</label>
    <select name = "genre">
      <option value = "Action Adventure">Action Adventure</option>
      <option value = "Mystery">Mystery</option>
      <option value = "SciFi">Sci-Fi</option>
      <option value = "Fantasy">Fantasy</option>
      <option value = "Historical Fiction">Historical Fiction</option>
      <option value = "Romance">Romance</option>
    </select>
  </div>
  </div>
  <br>
  <input type ="submit" class = "btn submit-btn" value ="Submit">
</form>

<!--JAVASCRIPT to show and hide drop down menu-->
<script>
function myGenre(){
 document.getElementById("myDropdown").classList.add("show");
}
function myGenreHide(){
  document.getElementById("myDropdown").classList.remove("show");
}
</script>




</div>
<?php include("includes/footer.html"); ?>
</body>
</html>
