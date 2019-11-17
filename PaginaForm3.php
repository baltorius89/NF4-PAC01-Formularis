<?php
session_unset();
?>
<html>
    <head>
        <title>Ejercicio3</title>
    </head>
    <body>
        <form method="get" action="PaginaFormProcess3.php">
            <p>Introduce un numero: </p>
            <input type="number" name="numero1"/>
            <p>Introduce un segundo numero: </p>
            <input type="number" name="numero2"/>
            <p>Introduce un tercer numero: </p>
            <input type="number" name="numero3"/>
            <input type="submit" name="submit" value="Submit"/>
        </form>
    </body>
</html>
