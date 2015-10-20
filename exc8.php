<?php

/**
 * [custom_array_reverse аналог array_reverse]
 * @param  array  $ar [исходный]
 * @return array  $arReturn   [выходной массив]
 */
function custom_array_reverse(array $ar) {
	 $arReturn = array();

	 if(is_array($ar)) {
	 	$length = count($ar);
	 	for($i = $length-1;$i >= 0;$i--)
	 		$arReturn[] = $ar[$i];
	 
	 	return $arReturn;
	 }
}

assert(custom_array_reverse(array(1,2,3,4)) == array(4,3,2,1));
assert(custom_array_reverse(array(1,2,2,3,3)) == array(3,3,2,2,1));


?>