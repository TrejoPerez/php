<!DOCTYPE>
<html>
        <head>
                <title>Mi primera web</title>
        </head>
        <body>
        	<div align="center">
            <form>
                <table border=1>
                	<caption><h2>Calculadora</h2></caption>
                	<tr>
                		<td colspan="4"><input type="text" name="TxtRes"></td>
                	</tr><!-- primera fila -->
                	<?php 
                

$s=array("1","2","3","+","4","5","6","7","-","7","8","9","*","C","0","=","/");


$j=1;
	echo "<tr>";

	for ($i=0;$i<count($s);$i++){  //counttodosloselementos
		echo "<td>";
		echo "<input type='button' name='b".$s[$i]."'value ='$s[$i]'>";
	echo"</td>";
		}//for i
			echo"</tr>";

?>
			
                </table>
            </form>
        </div>
    </body>       
</html>   
