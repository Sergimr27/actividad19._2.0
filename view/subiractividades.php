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

$fecha=$_POST['fecha'];
$descripcion=$_POST['descripccion'];
$foto=$_FILES['foto'];
$tiempo=$_POST['tiempo'];
$autor=$_POST['autor'];
$topics=$_POST['topics'];
// $foto=$_POST['foto'];
// var_dump($_FILES);


// echo $nombre1;
// echo "<br>";
// echo $edad1;
// echo "<br>";
// echo $correo1;
// echo "<br>";
// echo $telefono1;
// echo "<br>";
// echo $apellido1;
// echo "<br>";
// print_r($_FILES);
// echo "<br>";
// print_r($_SERVER);


// echo $foto1['type'];
// echo "<br>";
// echo ($foto1['size'])/1024;
include 'conexion.php';


$path="/www/danny/actividad19/img";

$destino=$_SERVER['DOCUMENT_ROOT'].$path."/".$fot1['name'];


$exito = move_uploaded_file( $foto['tmp_name'], $destino );

$sql = "INSERT INTO tbl_actividad (fecha, descripcion, imagen, tiempo, autor,  topics) VALUES ('$fecha', '$descripcion', '$foto', '$autor', '$tiempo','$autor','$topics');";
 $insert = mysqli_query($connection, $sql);
// echo $destino;
				


    // $exito = move_uploaded_file( $foto1['tmp_name'], $destino );
    // if ($exito) {
    //     // Conexión a la base de datos: !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    //     include 'conexion.php';
    //     // Subir los datos a la tabla correspondiente
    //     $sql = "INSERT INTO tbl_contactos VALUES ('$nombre1','$apellido1','$edad1','$correo1','$telefono1','$foto1');";
    //     $subir_form = mysqli_query($connection, $sql);
    // }
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'Proceso terminado',
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Volver'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                })
        }

        aviso('./actividades.php');
    </script>



    <?php
    // if (($foto1['size']<200*1024) && ($foto1['type']=="image/png" || $foto1['type']=="image/jpeg")) {
    //     $exito = move_uploaded_file( $foto1['tmp_name'], $destino );
    //     if ($exito) {
    //         // Conexión a la base de datos: !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    //         include 'conexion.php';
    //         // Subir los datos a la tabla correspondiente
    //         $sql = "INSERT INTO tbl_contactos VALUES ('$nombre1','$apellido1','$edad1','$correo1','$telefono1','$foto1');";
    //         $subir_form = mysqli_query($connection, $sql);
    //     }
    // } else {
    //     echo "El archivo es demasiado grande y supera los 200k";
    // }

    ?>
 
</body>
</html>





    ?>
</body>
</html>