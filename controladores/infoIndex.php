<?php
if (!empty($_POST["btnForm"])) {
    if (!empty($_POST["name"]) 
        and !empty($_POST["email"]) 
        and !empty($_POST["phone"])
        and !empty($_POST["typeService"])) {
            
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $typeService = $_POST["typeService"];

        $sql = $conexion->query("INSERT INTO informacion(name, email, phone, typeService)
                                values('$name','$email','$phone', '$typeService')");
        if ($sql == 1) {
            echo "<script> window.location.href='suscriExitosa.php' </script>";
        } else {
            echo "<div class='alert alert-danger'>Faltan campos por llenar</div>";
        }
            

    } else {
        
    }
    
}
?>