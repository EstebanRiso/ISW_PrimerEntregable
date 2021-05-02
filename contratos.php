<?php

    session_start();

    if($_SESSION['perfil']=='Administrador'){

        echo 'Hola Administrador';

    }
    elseif($_SESSION['perfil']=='Jefe de Servicios'){

        echo 'Hola Jefe de Servicios';

    }

    


?>

