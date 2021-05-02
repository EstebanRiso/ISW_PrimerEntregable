<?php
    require('coneccion/datos_coneccion.php');
    if(isset($_POST['ingresar'])){//Determina si una variable está definida y no es null
        
        $rut=$_POST['rut'];
        $contrasena=$_POST['contraseña'];

        //se hace una consulta a la bases de datos

        $consulta="SELECT * FROM USUARIOS WHERE RUT = '$rut' AND CONTRASENA = '$contrasena'";

            //aquí estoy ejecutando la consulta
        $resultado=mysqli_query($conexion,$consulta);

            //si lo datos coinciden con la base de dato me devuelve un 1 que quiere decir que los datos estan dentro de la base de datos
        $filas=mysqli_num_rows($resultado);

        if($filas>0){

            $datos_usuario=mysqli_fetch_array($resultado,MYSQLI_ASSOC);
                
            session_start();

            $_SESSION['rut']=$datos_usuario['RUT'];

            $_SESSION['nombre']=$datos_usuario['NOMBRE'];

            $_SESSION['apellido']=$datos_usuario['APELLIDO'];

            $_SESSION['perfil']=$datos_usuario['PERFIL'];

            header('location:inicio');


        }
        else{
            
            header('location:login.php');
        }
        
    }
    
    //cerramos la coneccion de la base de datos
    mysqli_close($conexion);     
?>