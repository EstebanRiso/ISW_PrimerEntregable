<?php require('../coneccion/datos_coneccion.php');
            
            if(isset($_POST['crearperfil'])){
                        
                $nombre_perfil = $_POST['perfil'];
                print($nombre_perfil);
                $consulta="INSERT INTO TIENE_06  FROM PERFIL p WHERE p.NOMBRE_PERFIL='$nombre_perfil' ";
            }
            else{
                echo "<h1>aqui no pasa nada<h1>";
            }

        ?>