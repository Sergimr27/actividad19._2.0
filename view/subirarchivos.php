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
    
    $descripcion = $_POST['descripcion'];
    $foto = $_FILES['foto'];
    $autor= $_POST['autor'];
    $topics= $_POST['topics'];
    $titulo = $_POST['titulo'];


    $path="/www/M4/actividad19/img";

    $destino=$_SERVER['DOCUMENT_ROOT'].$path.'/'.$foto['name']; 
   
   
  /*   $sql = "INSERT INTO `tbl_actividad` (`fecha`, `descripcion`, `imagen`,`tiempo`,`autor`,`topics`,`titulo`) VALUES ('$fecha', $descripcion, '$foto','$time','$autor','$topics');";
    mysqli_query($conexion, $sql); */
  
    if(($foto['size']<1000*1024) && ($foto['type']=="image/jpeg" || $foto['type']=="image/png" || $foto['type']=="image/gif")) {
        $exito=move_uploaded_file($foto['tmp_name'], $destino );
        if ($exito) {
            $destino=$foto['name'];
            $conexion = mysqli_connect('localhost', 'root', '', 'db_actividades');
            $sql = "INSERT INTO `tbl_actividad` (`descripcion`, `imagen`,`autor`,`topics`,`titulo`) VALUES ( '$descripcion', '$destino','$autor','$topics','$titulo')";
            $insert=mysqli_query($conexion, $sql);
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function aviso(url) {
                    Swal.fire({
                            title: 'Archivo Subido',
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
            }
        else {
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function aviso(url) {
                    Swal.fire({
                            title: '¡El archivo es demasiado grande!',
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Volver'
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = url;
                            }
                        })
                }
        
                aviso('./subiractividades.html');
            </script>
            <?php
        }
      }



?>



