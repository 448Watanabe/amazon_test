<?php

$item = ["a","b"];
$num_item = [1,2];


function delete(){
	global $item;
	global $num_item;

	$item = [];
	$num_item = [];
}
delete();

?>