<?php
 session_start();
$servername = "localhost";
$database = "usuario";
$username = "root";
$password = "";
$usuario=$_POST['txtUsu'];
$cont=$_POST['txtCon'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Conexión exitosa";
$sql = "SELECT * FROM usuario WHERE nombre_usuario = '$usuario' and cont_usuario = '$cont'";
$result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['id_usuario'];
      $count = mysqli_num_rows($result);
      if($count == 1) {
         session_register("usuario");
         $_SESSION['login_user'] = $myusername;
         
         header("location: menu.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }

?>