<?php

/**
 * [divisors находит все делители числа
 * @param  integer $number число
 * @return array         делители
 */
function divisors($number) {

	$div = array();

	 for($i = 1;$i < $number;$i++)
	 	if($number % $i == 0)
	 		$div[] = $i;

	return $div; 	
}

/**
 * [is_perfect если сумма делителей равна числу
 * @param  integer  $number число
 * @return boolean         истина/ложь
 */
function is_perfect($number) {
	return array_sum(divisors($number)) == $number ? true : false;
}

/**
 * [is_friendly сумма всех собственных делителей первого числа 
 * равна второму числу и наоборот
 * @param  integer  $first  первое число
 * @param  integer  $second второе число
 * @return boolean         истина/ложь
 */
function is_friendly($first, $second) {
	if(array_sum(divisors($first)) == $second 
		&& array_sum(divisors($second)) == $first)
		return true;
	else
		return false;
}
?>