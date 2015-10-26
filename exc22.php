<?php

/**
 * [$even проверка на четность]
 * @var int
 */
$even = function($val) {
	return(!($val & 1));
};

/**
 * [$odd проверка на нечетность]
 * @var int
 */
$odd = function($val) {
	return ($val & 1);
};

print_r(array_filter(range(1,100), $even));
print_r(array_filter(range(1,100), $odd));

?>