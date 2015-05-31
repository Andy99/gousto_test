<?php

function reversString($string)
{
	$reversed = "";
	$tmp = "";
	for($i = 0; $i < strlen($string); $i++) {
	    if($string[$i] == " ") {
	        $reversed .= $tmp . " ";
	        $tmp = "";
	        continue;
	    }
	    $tmp = $string[$i] . $tmp;    
	}
	$reversed .= $tmp;

	return $reversed ;
}

echo reversString("hello world!");

?>

