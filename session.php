<?php
session_start();
?>
<DOCTYPE html>
    <html>
        <body>
            <?php
            $_SESSION ["Favcolor"]="Blue";
            $_SESSION ["Favanimal"]="Cat";
            echo"Session variables are set.<br>";
            echo "Favorite color is
            ".$_SESSION["Favcolor"].".<br>";
            echo "Favorite animal is
            ".$_SESSION["Favanimal"].".";
            ?>
            </body>
            </html>
            