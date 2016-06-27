<!DOCTYPE html>
<?php 
include("conexion.php");
	//Recibir informacion con los metodos POST y GET
	date_default_timezone_set('America/Mexico_City');
	$edad =0;
	if(empty($_POST['txN'])) $n="";
	else $n = $_POST['txN'];

	if(empty($_POST['cboD'])) $dN =0;
	else $dN = $_POST['cboD'];

	if(empty($_POST['cboM'])) $dM =0;
	else $dM = $_POST['cboM'];

	if(empty($_POST['cboA'])) $dA =0;
	else $dA = $_POST['cboA'];

	if(empty($_POST['btE'])) $btE ="";
	else $btE = $_POST['btE'];
	
	if($btE=="Edad"){
		$Mes1 = date("m")-$dM;
		$Dia1 = date("d") - $dN;
		$Anio = date("Y") - $dA;
		if($Mes1>=0 && $Dia1 >= 0){
			$Anio = (date("Y") - $dA);
			$F = $dA."-".$dM."-".$dN;
			
		}	
		else{
			$F = $dA."-".$dM."-".$dN;
			$Anio = (date("Y") - $dA) - 1;

		}
		echo "<script> alert('Hola $n tu tienes $Anio años')</script>";	
			alta_usuario($n,$F,$Anio);	
	}

 ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
 	<form method="POST" action="">
 		<label>Nombre </label><input placeholder="Nombre" type="text" name="txN">
 		<br><br>
 		<label>Dia Nacimiento</label> 
 		<select name="cboD">
 			<option></option>
 			<?php 
 				for ($i=1; $i <=31 ; $i++) echo "<option>$i</option>\n";
 			 ?>
 		</select>
 		<br><br>
 		<label>Mes</label>
 			<select name="cboM">
 				<option></option>
	 				<?php 
	 					for ($i=1; $i <=12 ; $i++) echo "<option>$i</option>\n";
	 			 	?>
 			</select>
 			<br><br>
 		<label>Año</label>	
 			<select name="cboA">
 				<option></option>
 					<?php 
	 					for ($i=date("Y"); $i >=1950 ; $i--) echo "<option>$i</option>\n";
	 						/*
	 							Y regresa el año con 4 digitos
	 							y regresa el año con dos digitos

	 							M regresa el mes con 2 digitos
	 							m regresa el mes con 1 digitos solo los menores a 10
	 							D regresa el dia con 2 digitos
	 							d regresa el dia con 1 digito solo los menores a 10
	 						*/

	 			 	?>
 			</select>
 			<br><br>
 		<input type="submit" value="Edad" name="btE">
 		<input type="submit" value="Mostrar" name="btE">
 		<br><br><br>
 		<?php 
 		if ($btE=="Mostrar") {
		echo " 
 		<fieldset>
 		<legend>Registros</legend>
 		<table align='center'>
 			<caption><h3>Base de datos</h3></caption>
 			<tr>
 				<th>Id</th>
 				<th></th>
 				<th>Nombre</th>
 				<th></th>
 				<th>Fecha de Nacimiento</th>
 				<th></th>
 				<th>Edad</th>
 			</tr>";

 			$mysqli = conectar();
 			$sql = "SELECT * FROM usuarios"; 
 			if ($stmt = $mysqli -> prepare ($sql)) {
 				$stmt -> execute();
                
 				$stmt -> bind_result($id, $n, $f, $e ,$img);
 				while ($stmt -> fetch()) {
 					echo"
 						<tr align='center'>
 							<td>$id</td>
 							<td></td>
 							<td>$n</td>
 							<td></td>
 							<td>$f</td>
 							<td></td>
 							<td>$e</td>
 						</tr>";
 				}// while
 			}// if stmt

 			echo"
 		</table>
 		</fieldset>";

 		}// if mostrar
 		?>
 	</form>
 <!--
 	GET: La informacion esta visible en la URL
 	POST: La informacion no esta visible en la URL
 -->
</body>
</html>




