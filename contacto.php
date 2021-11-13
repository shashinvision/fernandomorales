<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$mensaje = $_POST['mensaje'];
$telefono = $_POST['telefono'];
$para = 'fmorales@prochile.gob.cl,prochiloe@hotmail.com';
$titulo = 'Web Fernando Morales';
$header = 'From: ' . $mail;
$msjCorreo = "Nombre: $nombre\n E-Mail: $mail\n Telefono: $telefono\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'index.php';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
