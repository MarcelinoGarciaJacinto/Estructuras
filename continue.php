Numeros impares
Inicia variable $i con valor 1.
se ejecuta un bucle while $i sea menor de 20.
if() detecta si el valor de la variable $i dividido entre 2 tiene resto 0. 
<?php
$i=1; 
while($i<20)  
	{  
	if(($i%2)==0)  
		{  
		$i++;  
		continue;  
	}  
	else  
		{  
		echo $i.'<br>';  
		$i++;  
		}  
	}
?>