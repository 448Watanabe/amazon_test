<?php
// get string data from url
$mystring = $_SERVER["REQUEST_URI"];
$where_Q = stripos($mystring, '?');
echo '<br />';
echo $mystring;
echo '<br />';
$where_5 = stripos($mystring, "5");
echo isset($where_5);
echo '<br />';

if(isset($where_5)){
	echo "yes";
}
echo '<br />';
echo '<br />';


?>