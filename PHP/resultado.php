<?php 
include 'head2.html';

//recibiendo datos desde el index.php usando el metodo post 
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

//mostrando los datos recibidos 

echo "<p>Mi nombre es: $nombre</p>";
echo "<p>Mi edad es: $edad</p>";
echo "<p>Mi correo es: $correo</p>";
echo "<p>Mi contraseña es: $contraseña</p>";
echo "<a href = 'index.php'> Back </a>"; //Boton para regresar 





?>