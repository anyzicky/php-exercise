<?php

/**
 * [lucky Проверяет счастливый билет]
 * @param  string $number [билет строка]
 * @return string         [вывод счастливый или нет]
 */
function lucky($number) {

	if (strlen($number) != 6) {
		echo 'must be 6 char';
	} else {

		$arChars = str_split($number);
		$first = array_slice($arChars, 0, 3);
		$second = array_slice($arChars, 3, 3);

		if(array_sum($first) == array_sum($second))
			return 'lucky';

	}
}

assert(lucky("123321") == 'lucky');
assert(lucky("345921") == 'lucky');
assert(lucky("555555") == 'lucky');
assert(lucky("444552") == 'lucky');
assert(lucky("222123") == 'lucky');


?>