<?php

/**
 * [addChars добавляем строку в нужном количестве]
 * @param string $str        [строка]
 * @param char/string $char       [строка или символ который добавим]
 * @param integer $length_str [число минус длина строки]
 */
function addChars($str,$char,$length_str) {
	 return str_repeat($char,$length_str - strlen($str)) . $str;
}

assert(addChars('12345', 'e', 7) == 'ee12345');
assert(addChars('world', 'hello', 6) == 'helloworld');


?>