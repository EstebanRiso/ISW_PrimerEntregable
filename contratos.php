<?php

    session_start();

    if($_SESSION['rol']=='Directora Informatica'){

        header('location:./contratos/perfil_tecnico.php');
    }
    elseif($_SESSION['rol']=='Encargado Juridico'){

        echo 'Hola Encargado Juridico';

    }


?>

