<?php
    $status = "";
    if ($_POST["action"]=="upload") {
    //Obtenemos los datos del archivo
        $tamano = $_FILES["archivo"]["size"];
        $tipo = $_FILES["archivo"]["type"];
        $archivo = $_FILES["archivo"]['name'];
        $prefijo = substr(md5(uniqid(rand())),0,6);
    
        if ($archivo !="") {
        //Guardamos el archivo a la carpeta files
            $destino = "../img/".$prefijo."_".$archivo;
            if (copy($_FILES['archivo']['tmp_name'],$destino)) {
                $status = "Archivo subido: ".$archivo;
            }else{
                $status = "Error al subir el archivo: ".$archivo;
            }
        }else{
            $status = "Error seleeciona un archivo2: ".$archivo;
        }
    
        echo "<script>alert('$status');";
        echo "document.location.href = 'formulario.php';</script>";
    }
?>