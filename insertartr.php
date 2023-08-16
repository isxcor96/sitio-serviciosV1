<?php
$servername = "localhost";
$database = "trabajador";
$username = "root";
$password = "";
$oficio=$_POST['txtOficio'];
$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApll'];
$tel=$_POST['txtTel'];
$edad=$_POST['txtEdad'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
 $sql = "INSERT INTO trabajador (nombre_trabajador, apellido_trabajador, edad_trabajador,servicio,telefono) VALUES ('$nombre', '$apellido','$edad','$oficio','$tel' )";
if (mysqli_query($conn, $sql)) {
       echo '<script language="javascript">alert("Felicidades ahora ya estás registrado en servimex");</script>'; 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//$sql = "INSERT INTO servicio (tipo_servicio) VALUES ('$oficio')";
//if (mysqli_query($conn, $sql)) {
  //    echo "Registro creado correctamente";
//} else {
 //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
mysqli_close($conn);
?>