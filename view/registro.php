<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    
    <?php

        include 'conexion.php';

        $usu = $_POST['usuario'];
        $pwd = $_POST['pwd'];
        $correo = $_POST['correo'];

        $sql = "INSERT INTO `tbl_usuario` (`nombre_usuario`, `password`, `e-mail`) VALUES ('$usu', $pwd, '$correo');";
        mysqli_query($conexion, $sql);

    ?>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'Usuario registrado correctamente',
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

        aviso('../index.html');
    </script>

</body>
</html>
<?php
/* if (isset($_POST['registrar'])) {
    header("location:../index.html");
}
 */
