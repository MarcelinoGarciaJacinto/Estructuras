<?php
$hora = date("H");

if ($hora < "1"){
    echo "Buenos dias";
    }
    elseif($hora <"11")
        {
         echo "Es mediodia";
         }
         elseif($hora < "21")
              {
              echo "buenas tardes";
              }
              else
                  {
                   echo "buenas noches";
                   }
?>