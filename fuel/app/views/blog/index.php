<?php
$name = 'admin';
$pass = 'password';
// ユーザ名とパスワードを検証
if ($user = Auth::validate_user($name, $pass)){
	// $name と $pass との組み合わせが検証されたならユーザーの表示名を印字
	echo $user['username'];
}
?>
