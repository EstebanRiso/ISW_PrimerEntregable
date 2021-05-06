
<?php require('../coneccion/datos_coneccion.php');

    
        

        $consulta= "SELECT CURRENT_DAY";
    
        $resultado= mysqli_query($conexion,$consulta);
        

        
    
        echo "$resultado";
        echo '<script type="text/javascript">alert(\' Precaución, plazo del documento n° [] vencerá dentro de [] meses \');</script>'; 


?>
