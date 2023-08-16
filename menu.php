<?php 
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
	$conexion=mysqli_connect('localhost','root','','trabajador');
?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estiloss.css">
	<link rel="shortcut icon" href="img/servimex.ico" />
	<title>mostrar datos</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<img src="img/LOGOBUENOp.jpg" alt="servimex" class="rounded-pill" id="icono">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Salir <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
      </li>
     </ul>
<script type="text/javascript">
    	var mm=new Date();
var m2 = mm.getMonth() + 1;
var mesok = (m2 < 10) ? '0' + m2 : m2;
var mesok=new Array(12);
mesok[0]="Enero";
mesok[1]="Febrero";
mesok[2]="Marzo";
mesok[3]="Abril";
mesok[4]="Mayo";
mesok[5]="Junio";
mesok[6]="Julio";
mesok[7]="Agosto";
mesok[8]="Septiembre";
mesok[9]="Octubre";
mesok[10]="Noviembre";
mesok[11]="Diciembre";
var d = new Date();
document.write('<mark>Fecha:'+d.getDate(),"/"+mesok[mm.getMonth()],'/'+d.getFullYear(),'</mark>');

</script>
<form class="form-inline my-2 my-lg-0" method="post" action="buscar1.php" name="form" >
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar servicio" aria-label="search" id="txtBuscar" name="txtBuscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
<br>
<br>
<h1 class="display-3">Tabla que muestra servicios disponibles </h1>
	<table class="table" >
		<thead class="thead-dark">
		<tr>
			
	  <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Servicio</th>
      <th scope="col">Teléfono</th>
      
		</tr>	
		</thead>
		

		<?php 
		$sql="SELECT * from trabajador";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr class="table-succes">
			<th scope="row"><?php echo $mostrar['id_trabajador'] ?></th>
			<td><?php echo $mostrar['nombre_trabajador'] ?></td>
			<td><?php echo $mostrar['apellido_trabajador'] ?></td>
			<td><?php echo $mostrar['edad_trabajador'] ?></td>
			<td><?php echo $mostrar['servicio'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
 
  
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<div class="p-3 mb-2 bg-dark text-white"><h4 class="display-4">¿Qué es servimex?</h4></div>
<div class="p-3 mb-2 bg-dark text-white"><h5 class="display-5">Servimex es un sitio que sirve cómo plataforma para personas que ejercen un oficio </h5></div>
<script src="js/valida_bus.js"></script>
</body>
</html>