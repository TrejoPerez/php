<html>
<head>
	<title>tres columnas de productos</title>
	<style>
		body{background:#ddd; color: #1A1C1E;}
ul{
list-style: none;

}

		#centro{width: 800px; margin: 10px auto 0 auto; border: 1px silver solid; background: #fff}
		#encabezado{width: 780; padding: 10px 10px 10px 10px; background: #005682; color: white;}
		#contenido{ background: #F1F5F8; padding: 5px 5px 5px 5px;}
		#contenido div{width: 252px; float: left; background: white; margin: 4px 3px 0 0; height: 200px; border: 2px solid silver}
		#contenido div h2{text-align: center;}
		#pie{clear: both; text-align: center; padding-top: 10px;}
	</style>
<head>
 
<body>
<form method="POST">
    <div id="centro">

            <div id="encabezado"> 
            <center><h1> Consulta de Usuarios </h1> <br>

                <input type="search" name="txtB" placeholder="Buscar">
            </center>
            </div>

            <div id="contenido">


         <?php
         include ("conexion.php");
         if(empty($_POST["txtB"]))
             $buscar="";
         else
             $buscar=$_POST["txtB"];



            if($buscar!=""){



                //limite de la pagina
                $TAMANO_PAGINA = 2;
                if(!empty($_GET["pagina"]))
                            $pagina = $_GET["pagina"];

                           else {
                                   $pagina=0;
                           }

                if($pagina==0){
                   $inicio=0;
                   $pagina=1;

                   }else{
                   $inicio =  ($pagina - 1) * $TAMANO_PAGINA;
                }

                $mysqli = conectar();
                //edad nombre de la tabla 
                $sql = "SELECT count(nombre) AS total FROM  usuarios WHERE nombre like '%$buscar%'";
                if($stmt1=$mysqli ->prepare($sql)){

                    $stmt1->execute();
                    $stmt1->bind_result($totalR);
                    $stmt1->fetch();
                    $stmt1->close();
                    

                }
                if($totalR>0){


                        //CEIL redondeo hacia arriba  contador de registros 
                       //TOP     
                        $totalP = ceil($totalR/$TAMANO_PAGINA);
                        

                              //limit inicio,
                           $sql="select * from usuarios where nombre like '%$buscar%'order by id limit $inicio, $TAMANO_PAGINA";

                       if($stmt2 = $mysqli -> prepare($sql)){        
                        $stmt2->execute();
                        $stmt2->bind_result($id,$n,$f,$e,$foto);
                        while($stmt2->fetch()){

                 ?>


                        <div>
                                <h2>Nombre del Usuario: <?php echo $n;?></h2>
                                <ul>
                                        <li><?php echo $id?></li>
                                        <li><?php echo $f?></li>
                                        <li><?php echo $e?></li>
                                        <li> <img src=" <?php echo $foto?>"width="50px" height="50px">  </li>

                                </ul>


                        </div>


                        <?php

                             }//while
                                $stmt2->close();

                                 }//php
                }//if$totalR
                else{
                    echo "<center>Usuario no encontrado</center>";
                }
                
                        ?>

                        </div>

                        <div id="pie">
                                <p>copyright 2016 - Trejo Perez Jose Alberto</p>

                                <?php
                    
                                        if($totalP>1){

                                            for($i=1;$i<$totalP;$i++){
                                                if($i==$pagina)
                                                    echo $i;
                                                else

                                        echo "<a href='paginacion.php?pagina=$i'>[$i]</a>";            
                                            }//for
                                            echo "</p>";

                                        }//if totalp
                                        
                    
            }    
                ?>

            </div>	
    </div>
</form>    
</body>
</html>  