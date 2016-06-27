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
        
        $s=array("1","2","3","+","4","5","6","-","7","8","9","*","C","0","=","/");
        $columna=4;
        for($i=1; $i<=$columna; $i++){
            echo "<tr>";
            $oper=($i*$columna)-$columna;
                for($j=$oper;$j<$i*columna; $sj++){
                    echo "<td>";
                    echo "<input type='button' name='b".$s[$j]."' value='$s[$j]' >";
                    echo "</td>";
                    }
                echo "</tr>";
        }//
        ?>
                </table>
            </form>
        </div>
    </body>       
</html>   