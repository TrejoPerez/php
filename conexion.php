<?php 
	
	function conectar(){
		$mysqli = new mysqli("localhost","root","password","formulario");
		if($mysqli-> connect_errno){
			echo "Error en la conexion a la base de datos";
			$mysqli=null;
		}//if
		else
			return $mysqli;
		
	} //conectar
	function alta_usuario($n , $f, $e ){ 
		$mysqli = conectar();
		if ($mysqli!=null) {
			$sql = "INSERT INTO usuarios(Nombre,FechNac,Edad) values(?,?,?)";

		if ($stmt=$mysqli-> prepare($sql)) {
			//Campos que se envian, s,s,i

			$stmt-> bind_param("ssi",$n,$f,$e);
			$stmt-> execute();
			echo "<script>alert('ALTA');</script>";
			$stmt-> close();
				//header('Location:formulario.php');
			 
        }//if stmt
			
		} //if mysqli
		else
			echo "<script>alert('error en la conexion');</script>";

		header('formulario.php');
		//exit();
	}//alta usuario
	
 ?>