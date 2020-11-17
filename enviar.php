<?php 

//$myemail = 'tovaropa@gmail.com';
$myemail = 'jefferfonseca@gmail.com, jefferfonseca@tovaro.edu.co';
$name = $_POST['nombre'];
$email = $_POST['correo'];
$telefono = $_POST['telefono'];
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];

//datos para el correo
$to = $myemail;
$email_subject = "Contacto desde tovaro.edu.co: $subject";
$email_body = "Nombre: $name \n Correo: $email \n Telefono: $telefono \n Mensaje: \n $message";
$headers = "From: $email";

//enviando mensaje
mail($to, $email_subject, $email_body, $headers);
echo "<script> alert('El mensaje se ha enviado correctamente');</script>";
//header('Location:contacto.php');
?>
