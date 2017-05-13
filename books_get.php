<!DOCTYPE html>
<head>
<link rel = "stylesheet" href = "styles.css">
</head>


<body>
<?php

$title = $_POST["title"];
$author = $_POST["author"];
$genre = $_POST["genre"];
$pubYear = $_POST["year"];

?>
You read 
<?php echo $title;?>
 by <?php echo $author;?>, the <?php echo $genre;?> novel published in <?php echo $pubYear ?>. <br>
Your book is a great choice!

</body>
</html>