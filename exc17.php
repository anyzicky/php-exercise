<?php

/**
 * [toCamelCase переводит строку вида test_var в строку testVar]
 * @param  string $str строка
 * @return string      новая строка в camelCase
 */
function toCamelCase($str) {
	 
	$camelcase = "";

	 $arStr = explode('_', $str);
	 foreach($arStr as $val)
	 	$camelcase .= ucfirst($val);

	 $camelcase = lcfirst($camelcase);

	 return $camelcase;
}

assert(toCamelCase('str_val_first') == 'strValFirst');
assert(toCamelCase('class_number_random') == 'classNumberRandom');


?>