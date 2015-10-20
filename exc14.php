<?php

/**
 * [pyramid простая пирамидка]
 * @return string [пирамидка :)]
 */
function pyramid() {
	 for($i=1;$i <= 9;$i++)
	 	echo str_repeat($i, $i)."\r\n";
}


?>