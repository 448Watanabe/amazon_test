<?php
// default data base
$item = ["yyy","xxx"];
$num_item = [1,2];

// uketoru values
$uketoru_item = "yyy";
$uketoru_num = "10";

/*
array_push( $item, "xxx");
array_push( $num_item, 1);
array_push( $item, "yyy");
array_push( $num_item, 2);
*/

function addstock($uketoru_item, $uketoru_num){
	global $item;
	global $num_item;
	// echo $uketoru_item, '<br />', $uketoru_num, '<br />';
	// echo gettype($item), '<br />';
	# checking whether or not the item is in the data and its position
	$yes_no = in_array($uketoru_item, $item);
	$position = array_search($uketoru_item, $item);
	
	// echo 'in_array', '<br />' ,(boolean) $yes_no , '<br />','<br />';
	// echo 'position', '<br />', $position , '<br />';

	//echo $address;
	if($yes_no == 0){
	// $uketoru_item is not in array data 
	echo "the item is not in the data.",'<br />';
	# add the item in the data
	array_push($item, $uketoru_item);
	array_push($num_item, $uketoru_num);
	// echo $item[0],'<br />', $num_item[0],'<br />';

	}else{
	# $uketoru_item
	"the item is in the data and is stocked.";
	# add the stock on the item
	// echo "yes_no", '<br />', $yes_no, '<br />';
	$num_item[$position] = $num_item[$position] + $uketoru_num;

	}
}

addstock($uketoru_item, $uketoru_num);
echo $item[0],'<br />', $num_item[0],'<br />';

?>