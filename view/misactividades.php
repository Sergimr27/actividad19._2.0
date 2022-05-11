<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Actividades</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e0b63cee0f.js" crossorigin="anonymous"></script>
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">#AppName</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 50vh;">
                    <li class="nav-item">
                        <a class="nav-link" href="./nosotros.php">Sobre nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./actividades.php">Actividades</a>
                    </li>
                    <?php
                    session_start();
                    if (isset($_SESSION['correo'])) {
                        ?>
                        <li>
                        <a class="nav-link active disabled " aria-current="page" href="./misactividades.php"> MisActividades</a>
                        </li>
                      
                        <?php
                    }
                ?>
                </ul>
                <form class="d-flex">
                <?php
                    if (isset($_SESSION['correo'])) {
                        ?>
                         <a href="./subiractividades.html"> <button class="btn btn-light form-control me-1" type="button"><i
                            class="fa-solid fa-arrow-up-from-bracket"></i></button></a>
                            <?php
                    }else {
                        ?>
                        <a href="./login.html"> <button class="btn btn-light form-control me-1" type="button"><i
                        class="fa-solid fa-arrow-up-from-bracket"></i></button></a>
                        <?php
                    }
                    ?>
                    <?php

            
                    if (isset($_SESSION['correo'])) {
                        ?>
                      <a href="./logout.php"> <button class="btn btn-light form-control ms-1" type="button">Logout</button></a>
                            <?php
                    }else {
                        ?>
                       <a href="./login.html"> <button class="btn btn-light form-control ms-1" type="button">Acceder</button></a>
                        <?php
                    }
                    ?>


                   
                </form>
            </div>
        </div>
    </nav>
    <!-- Top -->
    
    <!-- listado de actividades -->
    <div class="row-c">
      

        <div class="column-1 padding-m">
            <h4 class="padding-m">Mis Actividades</h4>
        </div>
       
           
            
    <?php

         $connection = mysqli_connect('localhost', 'root', '', 'db_actividades');
                $sql = "SELECT * FROM tbl_actividad WHERE `email`='{$_SESSION["correo"]}';";
                /* echo $sql; */
                $listadodept= mysqli_query($connection, $sql);

                /* $ruta=$_SERVER['SERVER_NAME']."/www/app-actividades/img/"; */
                $ruta="../img/";
                foreach ($listadodept as $actividad) {
                    ?>
                    <div class="column-3 padding-mobile">
                        <?php
                    $rutacompleta=$ruta.$actividad['imagen'];
                    /* echo $rutacompleta;
                    
                    echo '<br>'; */
                    /* echo $actividad['id']; */
                    /* $id=$actividad['id']; */
                    echo  "<a href='./actividad.php?id={$actividad['id']}'><img src='{$rutacompleta}' class='target'></a>";
                    ?>
                    <div style="float: right;" class="padding-m">
                    <?php
      }
                ?>
</body>
</html>