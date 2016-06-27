<!DOCTYPE>
<html>
        <head>
                <title>CALCULADORA</title>
                <script>
                    window.onload=function(){
                        // variables globales
                        var n1=0;
                        var n2=0;
                        var ope="";
                        var num=document.getElementById("TxtRes");
                        document.getElementById("b1").onclick=function(){
                            num.value += "1";
                        }//b1
                        document.getElementById("b2").onclick=function(){
                            num.value = num.value + "2";
                        }//b2
                        document.getElementById("b3").onclick=function(){
                            num.value += "3";
                        }//b3
                        document.getElementById("b4").onclick=function(){
                            num.value = num.value + "4";
                        }//b4
                        document.getElementById("b5").onclick=function(){
                            num.value += "5";
                        }//b5
                        document.getElementById("b6").onclick=function(){
                            num.value = num.value + "6";
                        }//b6
                        document.getElementById("b7").onclick=function(){
                            num.value += "7";
                        }//b7
                        document.getElementById("b8").onclick=function(){
                            num.value = num.value + "8";
                        }//b8
                        document.getElementById("b9").onclick=function(){
                            num.value += "9";
                        }//b9
                        document.getElementById("b0").onclick=function(){
                            num.value = num.value + "0";
                        }//b0
                        document.getElementById("b+").onclick=function(){
                            n1 = parseInt(num.value);
                            num.value="";
                            ope = this.value;
                        }//b+
                        document.getElementById("b-").onclick=function(){
                            n1 = parseInt(num.value);
                            num.value="";
                            ope = this.value;
                        }//b-
                        document.getElementById("b*").onclick=function(){
                            n1 = parseInt(num.value);
                            num.value="";
                            ope = this.value;
                        }//b*
                        document.getElementById("b/").onclick=function(){
                            n1 = parseInt(num.value);
                            num.value="";
                            ope = this.value;
                        }//b/
                        document.getElementById("b=").onclick=function(){
                            n2 = parseInt(num.value);
                            switch(ope){
                                case "+":
                                    num.value = n1 + n2;
                                    break;
                                case "-":
                                    num.value = n1 - n2;
                                    break;
                                case "*":
                                    num.value = n1 * n2;
                                    break;
                                case "/":
                                    num.value = n1 / n2;
                                    break;
                            }//switch
                        }//b=
                        document.getElementById("bC").onclick=function(){
                            n1 = 0;
                            n2 = 0;
                            num.value = "";
                            ope = "";
                        }//bC
                    }//principal
                </script>
        </head>
        <body>
        	<div align="center">
            <form>
                <table border=1>
                	<caption><h2>Calculadora</h2></caption>
                	<tr>
                		<td colspan="4"><input readonly placeholder="0" type="text" id="TxtRes"></td>
                	</tr><!-- primera fila -->
                	<?php 
                		//variables en php
                        $s=array("1","2","3","+","4","5","6","-","7","8","9","*","C","0","=","/");
                        $columna=4;
                        for ($i=1; $i<=$columna ; $i++) {
                        echo "<tr>"; 
                        $oper=($i*$columna)-$columna ;
                            for ($j=$oper;$j<$i*$columna ; $j++) { 
                                        echo "<td>";
                                        echo "<input type='button' id='b".$s[$j]."' value='$s[$j]' >";
                                        echo "</td>";
                            }
                            echo "</tr>";
                        }
                	?>
                </table>
            </form>
        </div>
    </body>       
</html>   
