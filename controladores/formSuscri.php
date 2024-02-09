<?php
if (!empty($_POST["btnSuscri"])) {
    if (!empty($_POST["correo"])) {
        $correo = $_POST["correo"];
        $sql = $conexion -> query("INSERT INTO suscribirse(correo) values('$correo')");
        if ($sql == 1) {
            echo "<script> window.location.href='suscriExitosa.php';</script>";
        } else {
            echo "<div class='alert alert-danger'>Please enter data</div>";
        }
        
    }
}
?>