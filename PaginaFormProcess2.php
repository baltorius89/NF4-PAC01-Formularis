<?php
    $personaje = $_POST['personaje'];
    $director = $_POST['director'];
    $genero = $_POST['genero'];
    $anime = $_POST['anime'];
    $web = $_POST['web'];
    $split_personaje = explode(",", $personaje);
    $split_director = explode(",", $director);
    $split_genero = explode(",", $genero);
    $split_anime = explode(",", $anime);
    $split_web = explode(",", $web);
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
        <form action="PaginaFormProcess2.php" method="post">
            <table>
                <tr>
                    <td>
                        <br/>
                        <p>Escoge tu personaje favorito:</p>
                        <select name="personaje">
                            <?php
                                for ($cont = 0; $cont < sizeof($split_personaje); $cont++) {
                                    echo "<option value='$split_personaje[$cont]'>$split_personaje[$cont]</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                        <p>Escoge tu director favorito:  </p>
                        <select name="director">
                            <?php
                                for ($cont = 0; $cont < sizeof($split_director); $cont++) {
                                    echo "<option value='$split_director[$cont]'>$split_director[$cont]</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                        <p>Escoge tu genero favorito:  </p>
                        <select name="genero">
                            <?php
                                for ($cont = 0; $cont < sizeof($split_genero); $cont++) {
                                    echo "<option value='$split_genero[$cont]'>$split_genero[$cont]</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                        <p>Escoge tu anime favorito:  </p>
                        <select name="anime">
                            <?php
                                for ($cont = 0; $cont < sizeof($split_anime); $cont++) {
                                    echo "<option value='$split_anime[$cont]'>$split_anime[$cont]</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                        <p>Escoge tu web favorito:  </p>
                        <select name="web">
                            <?php
                                for ($cont = 0; $cont < sizeof($split_web); $cont++) {
                                    echo "<option value='$split_web[$cont]'>$split_web[$cont]</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
            <br/>
            <input type="submit" name="submit" value="Submit" /> 
        </form>
    </body>
</html>