<?php
if(isset($_POST['Email'])) {

<bold>// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias</bold>
$email_to = "dannymarcano88@gmail.com";
$email_subject = "Contacto desde el sitio web";

<bold>// Aquí se deberían validar los datos ingresados por el usuario</bold>
if(!isset($_POST['Name']) ||
!isset($_POST['Email']) ||
!isset($_POST['Msj'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['Name'] . "\n";
$email_message .= "E-mail: " . $_POST['Email'] . "\n";
$email_message .= "Comentarios: " . $_POST['Msj'] . "\n\n";


<bold>// Ahora se envía el e-mail usando la función mail() de PHP</bold>
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>