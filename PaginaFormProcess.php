<html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
<?php
$db = mysqli_connect('localhost', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'animesite') or die(mysqli_error($db));
$variable_id = $_GET['anime_id'];
$variable = $_GET['orden'];
$id = $_POST['valor_id'];
$date = $_POST['date'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$rate = $_POST['rate'];
$query = "INSERT INTO reviews(review_anime_id, review_date, reviewer_name, review_comment, review_rating) VALUES ('$id', '$date', '$name', '$comment', '$rate')";
    mysqli_query($db,$query) or die(mysqli_error($db));
echo "Aqui puedes ver los comentarios del anime, junto con tu nuevo comentario acerca de el!<br>";
echo "<a href='PaginaDetails.php?anime_id=$id&orden=review_date'>Anime review</a>"
    
?>
 </body>
</html>
