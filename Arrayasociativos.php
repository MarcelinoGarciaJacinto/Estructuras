<?php
 echo '<h1>Uso de range</h1><br>';
  echo 'Vector simple<br>';
  foreach (range(0, 20) as $numero) {
    echo $numero.'<br>';
  } 
  echo 'Vector con incremento<br>';
  foreach (range(0, 200, 20) as $numero) {
    echo $numero.'<br>';
  }
  echo 'Vector de letras<br>';
  foreach (range('a', 'z') as $letra) {
    echo $letra.'<br>';
  }
  echo 'Vector de letras descendente<br>';
  foreach (range('M', 'C') as $letra) {
    echo $letra.'<br>';
  }
?>