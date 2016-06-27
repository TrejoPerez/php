<!DOCTYPE html>
<html>
<head>
<title>BUSCADOR</title>
</head>
<body>
   
    <form method="post">
  <center>  <input type="search" name="txtB" placeholder="BUSCAR"> </center>
    
    <center>   
   <table border="1">
       <caption>REGISTROS</caption>
       <tr>
           <th>Id</th>
           <th>Nombre</th>
           <th>Fecha Nacimiento</th>  
           <th>Edad</th>
           <th>FOTO</th>   
       </tr>
       
       
       <?php
        include("conexion.php");
       
       
       if(empty($_POST["txtB"]))
           $buscar ="";
        else
            $buscar=$_POST["txtB"];

        
       
        if($buscar!=""){   
            
        $mysqli= conectar();
        $sql="select * from usuarios where nombre like '%$buscar%' ";
        if($stmt=$mysqli -> prepare($sql)){
            $stmt->execute();
            $stmt->bind_result($id,$n,$f,$e,$img);
            while($stmt->fetch()){
     
            echo '<tr>
           <td>'.$id.'</td>
           
           <td>'.$n.'</td>
           
           <td>'.$f.'</td>
           
           <td>'.$e.'</td>
          
           <td>  <img src='.$img.' width="50" height="50" alt="50" alt="no se ve" title="hola"> </td>
           
       </tr>';
                
            }//while
            $stmt->close();
            }//if stmt
            }//if buscar
       ?>
          
   </table>
   </center>
   </form> 
</body>
</html>