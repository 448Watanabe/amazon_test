<?php

$sale = 0;

function checksales(){
	global $sale;
	echo number_format((float)$sale, 2, '.', '');
}
checksales();

?>