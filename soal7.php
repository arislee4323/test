<?php 

function data($var){
        if ($var >= 2 && $var <= 15) {
           return($var);
        }
    }

  	$datas = array_filter([1,4,7,9,15],'data'); 
  	echo count($datas);
?>


