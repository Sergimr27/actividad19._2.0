
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
    if (isset($_POST['correo'])&& isset( $_POST['pwd'])) {
        $email = $_POST['correo'];
        $contra = $_POST['pwd'];
        $conexion = mysqli_connect('localhost', 'root', '', 'db_actividades');
        $sql="Select * from tbl_usuario where email = '{$email}' and password = '{$contra}';" ;
        $result = mysqli_query($conexion, $sql);
        $num = mysqli_num_rows($result);
        if($num==1){
         
           session_start();
           $_SESSION['name']=$email;
           
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                /* function aviso(url) {
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
                // 
        
                aviso('actividades.php'); */
                
                alert ("todo ok")
            </script>
        <?php
        }else {
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
                // 
        
                aviso('login.html');
            </script>
            <?php
        }
    }
}

?>
</body>
</html>
