<?php
function get_url($url)
{
	$r=explode('/',$url);
	$r=array_filter($r);
	$r=array_merge($r,array());
	$end_of_url=$r[1];
	return ($end_of_url);
}
?>