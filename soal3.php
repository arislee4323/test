<?php
 
$number = "9865321";

  $length = strlen($number);
  for ($i=0; $i < $length; $i++) { 
    echo $number[$i] . str_repeat("0", ($length - 1 - $i)) . "<br>";

}

?>