<?php

/**
 * [custom_array_unique аналог array_unique]
 * @param  array  $ar [массив входной]
 * @return array  $arReturn   [новый массив с уникальными значениями]
 */
function custom_array_unique(array $ar) {
	$arReturn = array();

	if(is_array($ar)) {
		foreach ($ar as $val) {
			if(!in_array($val, $arReturn))
				$arReturn[] = $val;
		}

		return $arReturn;
	} 
}

assert(custom_array_unique(array(1,2,3,4)) == array(1,2,3,4));
assert(custom_array_unique(array(1,2,2,3,3)) == array(1,2,3));


?>