<?php

/**
 * 进制转换 d 十进制 o 八进制 h 十六进制 0-9
*/
class Conversion
{
	// x的y次方 x进制 y值
	public function pow($x, $y)
	{
		if($x == 0 && $y == 0) {
			throw new Exception("Error Params", 1);
		}

		if($x == 0) {
			return 0;
		}

		$result = 1;
		for($y; $y > 0; $y--) {
			$result *= $x;
		}

		return $result;
	}

	// 字母转为具体数值
	public function x($x) 
	{

	}

	// 十进制转为其他进制
	public function d2x($value, $x)
	{
		if($x == 'D' || $x == 'd') {
			return $value;
		}

		$m = [];
		while($value < $x) {
			$r = $value % $x;
			$value = ($value - $r)/$x;
			$m[] = $r;
		}
	
		$a = '';
		for($i = count($m) - 1; $i >= 0; $i --) {
			$a .= $m[$i];
		}

		return $a;
	}	

	// 其他进制转为十进制
	public function x2d($value, $x)
	{
		if($x == 'D' || $x == 'd') {
			return $value;
		}

		$result = 0;
		for($i = strlen($value) - 1, $j = 0; $i >= 0; $i--, $j++) {
			$m = substr($value, $i, 1);
			$result += $m*$this->pow($x, $j);
		}

		return $result;
	}
}

$c = new Conversion();
$result = $c->x2d('221', 3);
echo $result;
$result = $c->d2x(25,3);
echo $result;
