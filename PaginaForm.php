<?php
$db = mysqli_connect('localhost', 'root') or 
die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'animesite') or die(mysqli_error($db));
$query = 'SELECT
            anime_id, anime_name
         FROM
            anime';
$result = mysqli_query($db, $query) or die(mysqli_error($db));
?>

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
     <h1>Mete un nuevo comentario de cualquier anime!</h1>
     <form action="PaginaFormProcess.php" method="post">
   <table>
<?php
    while ($row = mysqli_fetch_assoc($result)) {
    extract($row);
        $table.= <<<ENDHTML
                <tr>
            <td>$anime_id, $anime_name</td>
        </tr>
ENDHTML;
}
    echo $table;
?>
   <tr>
     <td>
         <br/>
      <p>Introduce la id del anime: </p>
      <input type="number" name="valor_id"/><br/>
      <p>Introduce la fecha con el formato yyyy/mm/dd: </p>
      <input type="text" name="date" /><br/>
      <p>Introduce tu nombre: </p>
      <input type="text" name="name" /><br/>
      <p>Introduce el comentario del anime: </p>
      <input type="text" name="comment" /><br/>
      <p>Introduce una valoracion: </p>
      <input type="number" name="rate" min="1" max="5"/><br/>
      <p></p>
      <input type="submit" name="submit" value="Submit" /> 
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>
