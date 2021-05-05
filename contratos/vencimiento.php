
<script>
    alert(
    <?php
        
            require('../coneccion/datos_coneccion.php');

            $consulta= "SELECT L.ID_COMPONENTE_LEGAL, FI.FECHA_INICIO, FF.FECHA_FINAL FROM COMPONENTE_LEGAL CPL";
            $fechaActual= "SELECT CURDATE";
    
            $resultado=mysqli_query($conexion,$consulta);

            while($fila=mysqli_fetch_assoc($resultado)){
                $id_legal=$fila["ID_COMPONENTE"];
                $meses= $fechaActual - $fila["FECHA_FINAL"];

                if($meses <= 300){

                    echo "Precaucion en el componente legal id=$id_legal va a terminar contrato en ($meses-($meses % 100))/100 meses";
                    
                };
            }
        
    ?>
    );
</script>
