<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/tajima.css">
    </head>
    <body>
        <?php

        if(isset($_GET["usu"]) and isset($_GET["sen"])){
            if($_GET["usu"] == "BotsumaSenju" and $_GET["sen"]=="1945") {
            session_start();
            $_SESSION['usu'] = "BotsumaSenju";
            header("location:firstPage.php");
            }else{
                echo "<div class='titulo'><h1><center>Usuário e Senha Inválidos</h1></div>";
                echo "<a href='bem-vindo.php'><center><input type='submit' value='Voltar'>";
            }
        
        }/*else{
                echo "<div class='titulo'><h1>Você deve iniciar sessão</h1></div>";
                echo "<a href='bem-vindo.php'><center><input type='submit' value='Voltar ao Início'>";
        }*/
        
         ?>

    </body>


</html>
