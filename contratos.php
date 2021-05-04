<?php

    session_start();

    if($_SESSION['rol']=='Directora Informatica'){

        header('location:./contratos/index.php');
    }
    elseif($_SESSION['rol']=='Encargado Juridico'){

        echo 'Hola Encargado Juridico';

    }


?>

