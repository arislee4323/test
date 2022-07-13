<?php 
for ($i=1; $i < 16; $i++) { 
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "Eduwork"."<br>";
	}else if ($i % 3 == 0) {
		echo "Edu <br>";
	}else if ($i % 5 == 0) {
		echo "Work <br>";
	}else{
		echo "$i"."<br>";

	}
}


?>