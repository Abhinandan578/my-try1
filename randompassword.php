<?php
function generate_password($len) {
	$arr=array(
		"A" ,   "B" ,
		"C" ,   "D" ,
		"E" ,   "F" ,
		"G" ,   "H" ,
		"I" ,   "J" ,
		"K" ,   "L" ,
		"M" ,   "N" ,
		"O" ,	"P" ,
		"Q" ,	"R" ,
		"S" ,	"T" ,
		"U" ,	"V" ,
		"W",	"X" ,
		"Y" ,	"Z" ,
		"2" ,	"3" ,
		"4" ,	"5" ,
		"6" ,	"7" ,
		"8" ,	"9" ,
		"a" ,	"b" ,
		"c" ,	"d" ,
		"e" ,	"f" ,
		"g" ,	"h" ,
		"i" ,	"j" ,
		"k" ,	"l" ,
		"m" ,	"n" ,
		"o" ,	"p" ,
		"q" ,	"r" ,
		"s" ,	"t" ,
		"u" ,	"v" ,
		"w" ,	"x" ,
		"y" ,	"z"
		);
		$s="";
		for($i=1;$i<=$len;$i++)
		{
		$r=$arr[rand(0,57)];
		$s .=$r;
	}
		return $s;
	}
	$a=rand(14,16);
	$q=generate_password($a);
	echo $q;
?>