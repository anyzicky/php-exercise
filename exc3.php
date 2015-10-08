<?php

/**
	функция склонения существительных
	numEndings(5,array('котлет','котлеток','котлетки'));
	numEndings(3,array('яблоко', 'яблока', 'яблок'));

**/

function numEndings($num, array $endings) {

	$num = $num % 100;
	if($num >= 11 && $num <= 19){
		return $endings[2];
	} else {
		$num = $num % 10;
		switch ($num) {
			case '1':
				return $endings[0];
				break;
			case '2':
			case '3':
			case '4':
				return $endings[1];
				break;

			default:
				return $endings[2];
				break;
		}
	}


}

assert(numEndings(5,array('яблоко','яблока', 'яблок')) == 'яблок');
assert(numEndings(0,array('яблоко','яблока', 'яблок')) == 'яблок');
assert(numEndings(3,array('яблоко','яблока', 'яблок')) == 'яблока');
assert(numEndings(1,array('яблоко','яблока', 'яблок')) == 'яблоко');
assert(numEndings(18,array('яблоко','яблока', 'яблок')) == 'яблок');
assert(numEndings(12,array('яблоко','яблока', 'яблок')) == 'яблок');
assert(numEndings(101,array('яблоко','яблока', 'яблок')) == 'яблоко');
assert(numEndings(32,array('яблоко','яблока', 'яблок')) == 'яблока');

?>