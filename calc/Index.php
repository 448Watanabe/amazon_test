<?php


///////// coverting ulr info to string info

// get string data from url
$mystring = $_SERVER["REQUEST_URI"];
$where_Q = stripos($mystring, '?');

/*
echo $mystring;
echo '<br />';
*/

// take out needed data and name it $core
$core = substr($mystring,$where_Q + 1, strlen($mystring) - $where_Q - 1);
echo $core;
echo ' = ';
echo '<br />';


// echo strlen($mystring);
// echo '<br />';
// echo strlen($core) output is 3.


// 課題:汎用性が低い
////////// with one operant
if(strlen($core) == 3){
	// catings
	$core[0] = (int) $core[0];
	$core[2] = (int) $core[2];

	switch($core[1]){
    	case '+':
    		echo $core[0] + $core[2];
        	break;
	    case '-':
    	    echo $core[0] - $core[2];
        	break;
	    case '*':
    	    echo $core[0] * $core[2];
        	break;
	    case '/':
    	    echo $core[0] / $core[2];
        	break;
	    default:
    		echo "not Four arithmetic operations";
	}
}else{
	// if () is included
	$where_kakko = stripos($core, '(');
	$where_kakkoend = stripos($core, ')');
	$where_kake = stripos($core, '*');
	$where_waru = stripos($core, '/');
	$where_tasu = stripos($core, '+');
	$where_hiku = stripos($core, '-');

	if($where_kakko){
		/*
		echo '() is included!!';
		echo '<br />';
		echo 'where_kakko: ';
		echo $where_kakko;
		echo '<br />';
		*/
		switch($core[$where_kakko + 2]){
		case '+';
    	    $result1 = $core[$where_kakko + 1] + $core[$where_kakko + 3];
        	break;
	    case '-':
    	    $result1 = $core[$where_kakko + 1] - $core[$where_kakko + 3];
        	break;
    	case '*';
    	    $result1 = $core[$where_kakko + 1] * $core[$where_kakko + 3];
        	break;
	    case '/':
    	    $result1 = $core[$where_kakko + 1] / $core[$where_kakko + 3];
        	break;
	    default:
    		echo "not Four arithmetic operations";
    	}
		// calculate the rest
		switch($core[$where_kakkoend + 1]){

		case '+';
    	    echo $result1 + $core[$where_kakkoend + 2];
        	break;
	    case '-':
    	    echo $result1 - $core[$where_kakkoend + 2];
        	break;
    	case '*';
    	    echo $result1 * $core[$where_kakkoend + 2];
        	break;
	    case '/':
    	    echo $result1 / $core[$where_kakkoend + 2];
        	break;
	    default:
    		echo "not Four arithmetic operations";
    	}
	}else{
		// if () is not included
		/*
		echo '() is not included!!';
		echo '<br />';
		echo $where_kake;
		echo '<br />';
		*/
		// calculate * or / first
		
		switch($core[$where_kake]){
    	case '+':
    		$result1 = $core[$where_tasu - 1] + $core[$where_tasu + 1];
        	break;
	    case '-':
    	    $result1 = $core[$where_hiku - 1] - $core[$where_hiku + 1];
        	break;
	    case '*':
    	    $result1 = $core[$where_kake - 1] * $core[$where_kake + 1];
        	break;
	    case '/':
    	    $result1 = $core[$where_waru - 1] / $core[$where_waru + 1];
        	break;
	    default:
    		echo "not Four arithmetic operations";
		}
		// calculate the rest
		switch($core[$where_tasu]){
    	case '+':
    		echo $result1 + $core[$where_tasu - 1];
        	break;
	    case '-':
    	    echo $result1 - $core[$where_hiku - 1];
        	break;
	    case '*':
    	    echo $result1 * $core[$where_kake - 1];
        	break;
	    case '/':
    	    echo $result1 / $core[$where_waru - 1];
        	break;
	    default:
    		echo "not Four arithmetic operations";
		}
	}
}

?>
