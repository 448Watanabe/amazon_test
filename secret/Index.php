<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
	// もしパスワードの入力がなければ、こちらに入る（つまりは$_SERVERがセットされていない状態）
	// ネットでは入力のフェイズがない為こっちが表示される
    echo 'Password and user names are needed.';
    exit;
} else {
	// もしuser nameとpasswordが合ってるとこっちに入る
	if($_SERVER['PHP_AUTH_USER'] == 'amazon' && $_SERVER['PHP_AUTH_PW'] == 'candidate'){
		echo 'SUCCESS';
	}else{
	// 合ってないとこっちに入る	
		echo 'Wrong user name or wrong password.';
	}
    
}

?>