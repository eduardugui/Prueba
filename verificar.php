<?php
$contrasena_correcta = "tu_contrasena_secreta";

if(isset($_POST["contrasena"])) {
    $contrasena_ingresada = $_POST["contrasena"];
    if($contrasena_ingresada == $contrasena_correcta) {
        // La contraseña es correcta, redirigir al texto protegido
        header("Location: texto_protegido.html");
        exit();
    } else {
        // Contraseña incorrecta, redirigir de nuevo a la página de inicio de sesión
        header("Location: index.html");
        exit();
    }
} else {
    // Si no se envió una contraseña, redirigir de nuevo a la página de inicio de sesión
    header("Location: index.html");
    exit();
}
?>
