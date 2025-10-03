<?php

//Этап 1
$array = [1, 2, 3, 4, 5];
print_r("Этап 1: <br>" . array_sum($array) . "<br>");

//Этап 2
$array = [2, 4, 6, 8, 10];
print_r("Этап 2: <br>");
for ($i = 0; $i < count($array); $i++) {
	$array[$i] % 2 === 0 ? print_r($array[$i] . "<br>") : null;
}

//Этап 3
$array = [1, 3, 5, 7, 9, 2];
$count = 0;

print_r("Этап 3: <br>");
for ($i = 0; $i < count($array); $i++) {
	if ($array[$i] % 2 !== 0) {
		$count++;
		print_r($array[$i] . "<br>");
	}
}

print_r("Количество чисел: " . $count . "<br>");

//Этап 4
function simpleNumbers(array $array, string $type)
{
	foreach ($array as $value) {
		if ($value <= 1 || $value % 2 == 0 && $value != 2) {
			continue;
		}

		$isSimple = true;
		$limit = (int) sqrt($value);
		
		for ($i = 3; $i <= $limit; $i += 2) {
			if ($value % $i == 0) {
				$isSimple = false;
				break;
			}
		}
		if ($isSimple) {
			$simpleArray[] = $value;
		}

	}
	if ($type == "count") {
		return count($simpleArray);
	} else {
		return $simpleArray;
	}
}
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count = simpleNumbers($array, "count");
$simpleArray = simpleNumbers($array, "array");

print_r("Этап 4: <br>");
print_r("Количество простых чисел: " . $count . "<br>");
print_r("Простые числа: " . implode(", ", $simpleArray) . "<br>");
