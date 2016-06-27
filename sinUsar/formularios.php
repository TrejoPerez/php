<!DOCTYPE html>
<?php 
	//Recibir informacion con los metodos POST y GET
	$edad =0;
	if(empty($_POST['tnN'])) $n="";
	else $n = $_POST['txN'];  
     
    //DIA
	if(empty($_POST['cboD'])) $dN =0;
	else $dN = $_POST['cboD'];
    
    //MES
	if(empty($_POST['cboM'])) $dM =0;
	else $dM = $_POST['cboM'];

    //AÑO
	if(empty($_POST['cboA'])) $dA =0;
	else $dA = $_POST['cboA'];

    //BOTON EDAD 
	if(empty($_POST['btE'])) $btE ="";
	else $btE = $_POST['btE'];
	if($btE!=""){
        
        
		echo "<script> alert('Hola $n tu tienes $edad años')</script>";
	}

 ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
 	<form method="POST" action="">
 		<label>Nombre </label><input type="text" name="txN"><br>
 		<label>Dia Nacimiento</label> 
 		<select name="cboD">
 			<option>[DIA]</option>
 			<?php 
 				for ($i=1; $i <=31 ; $i++) echo "<option>$i</option>\n";
 			 ?>
 		</select>
 		<label>Mes</label>
 			<select name="cboM">
 				<option>[MES]</option>
	 				<?php 
	 					for ($i=1; $i <=12 ; $i++) echo "<option>$i</option>\n";
	 			 	?>
 			</select>
 		<label>Año</label>	
 			<select name="cboA">
 				<option>[AÑO]</option>
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
 		<input type="submit" value="EDAD" name="btE">
 	</form>
 <!--
 	GET: La informacion esta visible en la URL
 	POST: La informacion no esta visible en la URL
 -->
</body>
</html>




