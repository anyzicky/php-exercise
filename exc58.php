<?php

/**
 * ar_unique проверка на повторяющиеся элементы массива
 * @param  array  $ar исходный массив
 * @return mixin     массив или false
 */
function ar_unique(array $ar) {
	 $arExist = array();
	 foreach($ar as $r){
	 	if(in_array($r,$arExist))
	    	return false;
	  	else
	    	$arExist[] = $r;
	 }
	 return $arExist;
}

assert(ar_unique(array('1','3','5','test','2')) == array('1','3','5','test','2'));
assert(ar_unique(array('test',1,'sto','test',3,'four')) == false);



?>