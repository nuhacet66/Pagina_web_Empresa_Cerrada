<?php
  // Verifica si se ha enviado el formulario
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Obtiene los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    // Crea el mensaje de correo electrónico
    $para = 'web@nexoholding.com'; // Coloca tu dirección de correo electrónico aquí
    $titulo = 'Nuevo mensaje de '.$nombre;
    $contenido = 'Nombre: '.$nombre."\r\n";
    $contenido .= 'Correo electrónico: '.$email."\r\n";
    $contenido .= 'Mensaje: '.$mensaje."\r\n";
    
    // Envía el correo electrónico
    if (mail($para, $titulo, $contenido)) {
      echo 'El mensaje se ha enviado correctamente';
    } else {
      echo 'Error al enviar el mensaje';
    }
    
  } else {
    // Si no se ha enviado el formulario, redirige al usuario a la página del formulario
    header('Location: formulario.html');
  }
?>
