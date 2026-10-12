<?php
$nombre = htmlspecialchars($_POST['nombre'] ?? '');
$apellido = htmlspecialchars($_POST['apellido'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$curso = htmlspecialchars($_POST['curso_seleccionado'] ?? '');


echo "<h1>¡Datos recibidos con éxito!</h1>";
echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
echo "<p><strong>Apellido:</strong> " . $apellido . "</p>";
echo "<p><strong>Email:</strong> " . $email . "</p>";
echo "<p><strong>Curso:</strong> " . $curso . "</p>";
echo '<br><a href="index.html">Volver al formulario</a>';
?>