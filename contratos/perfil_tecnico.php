
<?php 
    session_start();

    if(!isset($_SESSION['rut'])){
        header('location:../login.php');
    }
?>
    
    
<!-- head -->
    <?php include('../partes/head.php') ?>
<!-- fin head -->


<body>
    <div class="d-flex" id="content-wrapper">
    <!-- sideBar -->
    <?php include('../partes/sidebar.php') ?>
    <!-- fin sideBar -->

        <div class="w-100">

    <!-- Navbar -->
        <?php include('../partes/nav.php') ?>
    <!-- Fin Navbar -->

       
        <!-- Page Content -->

            <br></br><h2 class="d-flex justify-content-center">PERFIL TECNICO</h2><br></br><br></br>

                <div class="d-flex justify-content-center">

                
                    <form action="ver_perfiles.php" method="POST">

                        <label for="nombreperfil">Escoja un perfil:</label>
                            <select id="perfil" name="perfil">
                             <?php

                                    require('../coneccion/datos_coneccion.php'); 
                                    $consulta="SELECT NOMBRE_PERFIL from perfil";
                                    $resultado=mysqli_query($conexion,$consulta);

                                    while($fila=mysqli_fetch_assoc($resultado)){
                                        $NOMBRE_PERFIL=$fila['NOMBRE_PERFIL'];
                                        echo "<option value= '$NOMBRE_PERFIL'>$NOMBRE_PERFIL</option>";
                                }
                            ?>
                        </select>
                    
                            <button type="button" class="btn btn-danger">+</button>
                        <input type="submit" name="verperfil" value="VER PERFIL"></input>

                    </form>
                
                    </div>

                <form action="post_perfiles.php" method="POST">
                        <div class="d-flex justify-content-center espacio1"> 
                            <button type="submit" name="crearperfil" class="btn btn-primary btn-lg">crear ficha técnica</button>
                         </div>
                </form>
            <div class="d-flex justify-content-center espacio2"> 
                <button type="button" class="btn btn-primary btn-lg">descargar ficha técnica</button>
            </div>


        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, { 
                type: 'bar',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
                    datasets: [{
                        label: 'Nuevos equipos',
                        data: [50, 100, 150, 200],
                        backgroundColor: [
                            '#12C9E5',  
                            '#12C9E5',
                            '#12C9E5',
                            '#111B54'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
</body>

</html>