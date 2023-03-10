<?php
// Verificar si se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Variables de entrada
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Validar los campos
  if (empty($name) || empty($email) || empty($message)) {
    echo "Por favor, completa todos los campos";
  } else {
    // Enviar correo electrónico
    $to = "francopanale@gmail.com";
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $name \n\nEmail: $email \n\nMensaje: $message";
    
    if (mail($to, $subject, $body)) {
      echo "Gracias por tu mensaje. Te responderé pronto!";
    } else {
      echo "Lo siento, hubo un error al enviar tu mensaje";
    }
  }
}
?>