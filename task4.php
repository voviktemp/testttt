<?php

$arr = [1, 1, 2, 3, 4 -51, 12, 12, 12, -51];

$pre = null;
$count=0;
foreach($arr as $one){
	if($pre === $one) $count++;
	$pre = $one;
}

echo "кол-во последовательных пар - $count";
