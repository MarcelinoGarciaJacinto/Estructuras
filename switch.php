calficacion de examen, depende de la calficacion en cada categoria;
<?php
switch($valor=7)
    {
     case ($valor < 5):
     echo "nota muy baja";
     break;

     case (($valor >= 6) && ($valor <= 9)):
     echo "buena nota";
     break;

     case ($valor = 10):
     echo "excelente nota";
     break;
     }
?>