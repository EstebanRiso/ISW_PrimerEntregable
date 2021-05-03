<?php

    session_start();

    if($_SESSION['rol']=='Directora Informatica'){

        echo 'Hola Directora Informatica';

    }
    elseif($_SESSION['rol']=='Encargado Juridico'){

        echo 'Hola Encargado Juridico';

    }


?>

