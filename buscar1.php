<?php 
$oficio=$_POST['txtBuscar'];
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
	<title>Resultado de búsqueda</title>
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
        <a class="nav-link" href="menu.php">Regresar <span class="sr-only">(current)</span></a>
      </li>
     </ul>
    </div>
    <script type="text/javascript">
    	var mm=new Date();
var m2 = mm.getMonth() + 1;
var mesok = (m2 < 10) ? '0' + m2 : m2;
alert("hola amor te amo mucho, ¿nos casamos?");
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
</nav>
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<br>
<br>
<h1 class="display-3">Resultado de búsqueda </h1>
	<table class="table" >
		<thead class="thead-dark">
		<tr>
	  <th scope="col">Nombre</th>
      <th scope="col">Servicio</th>
      <th scope="col">Teléfono</th>
      	</tr>	
		</thead>
		<?php 
		$sql="SELECT nombre_trabajador,servicio,telefono from trabajador where '$oficio' = servicio ";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
			?>
		<tr class="table-succes">
			<td><?php echo $mostrar['nombre_trabajador'] ?></td>
			<td><?php echo $mostrar['servicio'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</body>
</html>

 
  
	