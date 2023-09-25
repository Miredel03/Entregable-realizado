<!DOCTYPE html>
<html >
<head>
    <title>Procesando formulario</title>
</head>
<body>
 
<h2>Datos del formulario</h2>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $mensaje=$_POST["mensaje"];

    echo "<table border = '1' >";
    echo "<tr><th>Campo</th><th>Valor</th></tr>";
    echo "<tr><th>Nombre:</th><td>" . $nombre . "</td></tr>";
    echo "<tr><th>Correo Electronico: </td><td>" . $email . "</td></tr>";
    echo "<tr><th>Mensaje:</td><td>" . $mensaje . "</td></tr>";
    echo "</table>";
} else {
    echo "Acceso no permitido";
}

?>
    
</body>
</html>