<?php
$servername = "localhost";
$database = "usuario";
$username = "root";
$password = "";
$nombre=$_POST['txtUsuario'];
$direccion=$_POST['txtDir'];
$apellido=$_POST['txtApll'];
$contraseña=$_POST['txtCon'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
 $sql = "INSERT INTO usuario (nombre_usuario, apellido_usuario,cont_usuario,direccion_usuario) VALUES ('$nombre', '$apellido','$contraseña','$direccion' )";
if (mysqli_query($conn, $sql)) {
    echo '<script language="javascript">alert("usuario creado correctamente");</script>'; 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>