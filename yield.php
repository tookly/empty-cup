<?php
function xrange($start, $end, $step = 1){
	for($i = $start; $i<= $end; $i += $step) {
		yield $i;
	}
}

$range = xrange(1, 10);
$range->rewind();
echo $range->current();
//var_dump($range);
$range->next();
echo $range->current();
//foreach($range as $num){
//foreach(range(1,10) as $num){
//	echo $num,"\n";
//}
