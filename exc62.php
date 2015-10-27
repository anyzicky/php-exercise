<?php

/**
 * camelString Делает заглавной каждую первую букву в предложении.
 * @param  string $str строка предложений
 * @return string      строка 
 */
function camelString($str) {
	$arStr = explode('. ',$str);
	foreach($arStr as &$s) {
	  if(is_numeric(substr($s,0,1)))
	  	continue;
	  else $s = ucfirst($s);
	}

	$st = implode('. ',$arStr);
	return $st;
}

assert(camelString('hi test. who me?') == 'Hi test. Who me?');
assert(camelString('hello world. i learn php. 2 month later.') == 'Hello world. I learn php. 2 month later.');