<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
 
    $conexion= mysqli_connect('localhost', 'root', '', 'db_actividades');
    $sql = "SELECT * FROM tbl_actividad WHERE id_act={$_GET['id']}";
    $listadodept=mysqli_query($conexion,$sql);
    $numfilas=mysqli_num_rows($listadodept);
    $ruta= "../img/";


    foreach ($listadodept as $actividad) {
        $rutacompleta=$ruta.$actividad['imagen'].".jpg";
        echo "<div style='text-align:center'>";
        // echo $rutacompleta;
        echo "<br>";
        echo "<br>";
        echo "<b>Titulo</b>";
        echo "<br>";
        echo "{$actividad['titulo']}";
        echo "<br>";
        echo "<br>";
        echo "<b>Descripcion</b>";
        echo "<br>";
        echo "{$actividad['descripcion']}";
        echo "<br>";
        echo "<br>";
        echo "<b>Autor</b>";
        echo "<br>";
        echo "{$actividad['autor']}";
        echo "<br>";
        echo "<br>";
        echo "<b>Topics</b>";
        echo "<br>";
        echo "{$actividad['topics']}";
        echo "<br>";
        echo "<br>";
        echo  "<img src='{$rutacompleta}' width=500vh, height=400vh class='target'>";
        
    }
    echo "<br>";
    echo "<br>";
    ?>
    <a href="./actividades.php"><button type="button" class="btn btn-success"><i
    class="fa-solid fa-chalkboard-user"></i> Volver</button></a>

    </div>
</body>
</html>

