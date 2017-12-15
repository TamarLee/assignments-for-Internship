<?php

//პირველი დავალება
//შექმენით ფუნქცია, რომელიც მიიღებს ერთ პარამეტრს მაგალითად n და დააბრუნებს n ელემენტიან მასივს, შევსებულს 1 დან 100 მდე შემთხვევითი რიცხვებით.

function arrayCreator($n){

	for ($i=0; $i < $n; $i++) { 
		$array[] = rand(1, 100);
	}

	return $array;
}

$n = 5;
$array = arrayCreator($n);
print_r($array);
echo "<br>";

//მეორე დავალება
//შეატრიალეთ აღნიშნული მასივი.


$reversed = array_reverse($array);
print_r($reversed);
echo "<br>";


//მესამე დავალება
//დაალაგეთ მასივში ელემენტები ზრდადობით.
//ფუნქციის გამოყენებით

sort($reversed);
print_r ($reversed);
echo "<br>";

//მესამე დავალება ალგორითმით

for ($i=0; $i < $n-1; $i++) { 
	for ($j=$i+1; $j < $n; $j++) { 
		if ($array[$i]>$array[$j]){
			$x = $array[$i];
			$array[$i] = $array[$j];
			$array[$j] = $x;
		}
	}
}

print_r($array);
