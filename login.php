<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/login.css">
    
</head>

<body>

    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-8 col-sm-8 col-md-8 col-lg-3 separar">

                <form action="validar_login.php" method="POST" class="formulario">
                <h2>INICIAR SESIÓN</h2>
                </br>
                <div class="form-group">   
                    <label for="rut">Rut:</label>
                    <input type="text" name="rut" class="form-control" placeholder="Ingrese rut" required></input>
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña:</label>  
                    <input type="password" name="contraseña" class="form-control" placeholder="Ingrese contraseña" required></input>
                </div>     
                </br>
                <div class="d-grid gap-2">
                    <button type="submit" name="ingresar" class="btn btn-primary btn-lg btn-block">Ingresar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>