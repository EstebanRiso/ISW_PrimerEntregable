
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


            <div class="d-flex justify-content-center" >
                <h1><br><h1>TABLA DEL 
            <?php require('../coneccion/datos_coneccion.php');
            
                if(isset($_POST['verperfil'])){
                            
                    $nombre_perfil = $_POST['perfil'];
                    echo "$nombre_perfil</h1>";
                    $consulta="SELECT * FROM PERFIL p WHERE p.NOMBRE_PERFIL='$nombre_perfil' ";

                    $resultado=mysqli_query($conexion,$consulta);

                    $fila=mysqli_fetch_assoc($resultado);
                    
                    $ID_PERFIL=$fila["ID_PERFIL"];
                    $TECLADO=$fila["TECLADO_DESCRIPCION"];
                    $RAM=$fila["RAM_DESCRIPCION"];
                    $VIDEO=$fila["VIDEO_DESCRIPCION"];
                    $MOUSE=$fila["MOUSE_DESCRIPCION"];
                    $GABINETE=$fila["GABINETE_DESCRIPCION"];
                    $CPU=$fila["CPU_DESCRIPCION"];
                    $MONITOR=$fila["MONITOR_DESCRIPCION"];
                    $DISCO_DURO=$fila["DISCODURO_DESCRIPCION"];
                    $UNIDADES=$fila["UNIDADES_DESCRIPCION"];
                    $VARIOS=$fila["VARIOS_DESCRIPCION"];
            ?>
            </div>
            <form action="perfil_tecnico.php">
            <div class="d-flex justify-content-end espacio4">
                <button type=submit  class="btn btn-primary btn-lg" >Volver</button>
            </div>
            </form>
            <br></br>
            <table  cellpadding="2px" class=espacio3 border="1" bordercolor="black">
                <tr>
                    <th>ID PERFIL</th>
                    <th>TECLADO</th>
                    <th>RAM </th>
                    <th>VIDEO </th>
                    <th>MOUSE </th>
                    <th>GABINETE </th>
                    <th>CPU </th>
                    <th>MONITOR</th>
                    <th>DISCO DURO </th>
                    <th>UNIDADES </th>
                    <th>VARIOS </th>
                </tr>
                <tr>
                    <?php

                            
                            echo "<td width='5%'>$ID_PERFIL</td>";
                            echo "<td width='5%'>$TECLADO</td>";
                            echo "<td width='5%'>$RAM</td>";
                            echo "<td width='5%'>$VIDEO</td>";
                            echo "<td width='5%'>$MOUSE</td>";
                            echo "<td width='5%'>$GABINETE</td>";
                            echo "<td width='5%'>$CPU</td>";
                            echo "<td width='5%'>$MONITOR</td>";
                            echo "<td width='5%'>$DISCO_DURO</td>";
                            echo "<td width='5%'>$UNIDADES</td>";
                            echo "<td width='5%'>$VARIOS</td>";
                            
                         
                            
                         
                        }else{
                             echo "nada";
                         }

                    ?>
                </tr>
                <?php 

                    
                ?>
            </table>    
                


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