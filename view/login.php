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
if (isset($_POST['Inicio'])) {
    if (isset($_POST['correo']) && isset($_POST['pwd']) ) {
        $email = $_POST['correo'];
        $contra = $_POST['pwd'];
        $sql="Select * from tbl_usuario where email = '{$email}' and password = '{$contra}';" ;
        $conexion = mysqli_connect('localhost', 'root', '', 'db_actividades');
        $result = mysqli_query($conexion, $sql);
        $num = mysqli_num_rows($result);
        if($num==1){
            session_start();
            $_SESSION['correo']= $email;
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function aviso(url) {
                    Swal.fire({
                            title: 'Usuario Correcto',
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

                aviso('../view/actividades.php');
            </script>
            <?php 
            //header("Location:index1.php");
        }else {
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function aviso(url) {
                    Swal.fire({
                            title: 'Usuario Incorrecto',
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

                aviso('./login.html');
            </script>
            <?php
        }
    }else {
        echo "Introduzca su correo y su contrase??a";
    }
   
}
?>  
</body>
</html>