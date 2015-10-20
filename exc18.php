<?php


/**
 * [is_anagramm проверяет является ли строки анаграммами]
 * @param  string  $first  первое слово
 * @param  string  $second второе слово
 * @return boolean         истина или ложь
 */
function is_anagramm($first, $second) {
	 $arFirst = str_split($first);
	 $arSecond = str_split($second);

	 if(count($arFirst) == count($arSecond)){
	 	foreach($arFirst as $char) {
	 		if(!in_array($char, $arSecond))
	 			return false;
	 	}

	 	return true;
	 }

}

assert(is_anagramm('воз','зов') == true);
assert(is_anagramm('киборг','гробик') == true);
assert(is_anagramm('корсер','костер') == true);
assert(is_anagramm('сектор','костер') == true);


?>