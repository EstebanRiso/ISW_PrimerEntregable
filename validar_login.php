<?php
    require('coneccion/datos_coneccion.php');
    if(isset($_POST['ingresar'])){
        
        $rut=$_POST['rut'];
        $contrasena=$_POST['contraseña'];

        $consulta="SELECT E.RUT_ENCARGADO, E.NOMBRE_ENCARGADO, E.APELLIDO_ENCARGADO, E.ROL FROM ENCARGADOS_DE_CONTRATO E, CUENTA C  
        WHERE E.RUT_ENCARGADO = '$rut' AND C.CONTRASENA = '$contrasena' AND E.ID_CUENTA = C.ID_CUENTA";

        $resultado=mysqli_query($conexion,$consulta);
 
        $filas=mysqli_num_rows($resultado);

        if($filas>0){

            $datos_usuario=mysqli_fetch_array($resultado,MYSQLI_ASSOC);
                
            session_start();

            $_SESSION['rut']=$datos_usuario['RUT_ENCARGADO'];

            $_SESSION['nombre']=$datos_usuario['NOMBRE_ENCARGADO'];

            $_SESSION['apellido']=$datos_usuario['APELLIDO_ENCARGADO'];

            $_SESSION['rol']=$datos_usuario['ROL'];

            header('location:inicio');


        }
        else{
            header('location:login.php');
        }
        
    }
    
    mysqli_close($conexion);     
?>