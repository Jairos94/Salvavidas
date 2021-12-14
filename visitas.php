<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/">

    <title>Visitas</title>
</head>

<body>
    <div class="container text-center my-auto">
        <!-- Centrado   -->
        <div class="border m-4 d-flex justify-content-center align-items-center" style="height: 600px;">
            <div class="col-6">
                <!-- Ingreso de número de cédula -->
                <img src="img/logo.png" class="img-thumbnail my-5" alt="...">
                <form action="RealizarVisita.php" method="post">

                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-id-card mx-3"></i>
                            Cédula de identidad
                        </span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="Cedula">
                    </div>
                    <!-- Dropdawn -->
                    <br>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected disabled>Seleccione un tipo de cédula</option>
                        <option value="1">Nacional</option>
                        <option value="2">Extranjera</option>
                    </select>
                    <!-- Grupo de botones -->


                    <!-- Busca el departaento -->


                    <div class="input-group flex-nowrap">


                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected disabled>Seleccione un departamento</option>
                            <?php
                            include('conexion.php');

                            $database = new ConectarBD();
                            $db = $database->open();
                            $sql = "SELECT * FROM departamento";


                            try {

                                foreach ($db->query($sql) as $row) { ?>


                                    <option value="<?php echo $row['dptId'] ?>">
                                    <?php echo $row['dptDescripcion'];
                                }  ?>
                                    </option>
                        </select>
                    <?php
                            } catch (PDOException $e) {
                                //throw $th;
                                echo 'Hay un problema con la conexion ' . $e->getmessage();
                            }
                            $database->close();


                    ?>
                    </div>




                    <!-- Cierre de departamento -->
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="index.html"><button type="button" class="btn btn-info">Regresar</button></a>
                        <button type="button" class="btn btn-success" name ="Guardar">Gestionar visita</button>
                    </div>
                </form>
                <?php
                include('RealizarVisita.php');
                ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="busquedacedula.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- Dependdencia de icononos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/aa1aae703a.js" crossorigin="anonymous"></script>
</body>

</html>