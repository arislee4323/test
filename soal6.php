
<?php 

    function data($var){
        if ($var >= 2 && $var <= 15) {
           return($var);
        }
    }
    $number = array(1,4,7,9,12);
    print_r(array_filter($number,"data"));

?>

