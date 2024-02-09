<?php
if (!empty($_POST["btnContact"])) {
    if (
        !empty($_POST["name"])
        and !empty($_POST["email"])
        and !empty($_POST["phoneNumber"])
        and !empty($_POST["message"])
    ) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["phoneNumber"];
        $message = $_POST["message"];

        $sql = $conexion->query("insert into contact(name, email, phoneNumber, message)
                          values('$name', '$email', '$phoneNumber', '$message')");
        
        if ($sql == 1) {
            echo "<script> window.location.href='suscriExitosa.php' </script>";
        } else {
            echo "<div class='alert alert-danger'>Please enter all fields</div>";
        }
        
    } else {
        # code...
    }
}
