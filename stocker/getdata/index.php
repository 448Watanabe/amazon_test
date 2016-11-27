<?php

$item = ["yyy","xxx"];
$num_item = [0,2];

// uketoru values
$uketoru_item = "xxx";
$uketoru_num = "10";

function checkstock($uketoru_item){
	global $item;
	global $num_item;

	$yes_no = in_array($uketoru_item, $item);
	// echo $yes_no,'<br />';
	$position = array_search($uketoru_item, $item);
	// echo $position,'<br />';

	if($yes_no == 1){
		echo $uketoru_item, ':';
		echo $num_item[$position], '<br /> ';
	}else{
		// echo count($item),'<br />';
		for ($i = 0; $i <= count($item) - 1; $i++) {
    		if($num_item[$i] != 0){
    			echo $item[$i],": ",$num_item[$i],'<br />';
    		}	
	    }
	}
	// if(){

	// }
}
checkstock($uketoru_item);

?>