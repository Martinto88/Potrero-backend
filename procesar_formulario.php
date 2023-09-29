<?php

// Verifica si se ha enviado el formulario de inicio de sesión (login)
if (isset($_POST['login'])) {
    $login_email = $_POST['login_email'];
    $login_password = $_POST['login_password'];

    // Ejemplo de validación básica (NO recomendado para un entorno de producción):
    $usuario_valido = false;

    // Verifica las credenciales (ejemplo: correo "test@example.com" y contraseña "1234")
    if ($login_email === 'test@example.com' && $login_password === '1234') {
        $usuario_valido = true;
    }
    
    if ($usuario_valido) {
        // Las credenciales son válidas, inicia la sesión (esto es un ejemplo básico)
        $_SESSION['usuario'] = $login_email;

        // Redirige al usuario a la página de inicio o a donde lo necesites
        header('Location: pagina_de_inicio.php');
        exit(); // Termina el script
    } else {
        echo "Credenciales incorrectas. Por favor, intente de nuevo.";
    }
}
?>
	