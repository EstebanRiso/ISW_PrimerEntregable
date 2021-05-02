<?php

    $db_host="localhost";
    $db_nombre="camilo";
    $db_usuario="root";
    $db_contraseña="";
    $db_puerto=3306;

    //conecta con la base de datos
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre,$db_puerto);

    if(mysqli_connect_errno()){

        echo "Error al conectar la base de datos";
        exit();

    }

    mysqli_set_charset($conexion,"utf8"); 

?>