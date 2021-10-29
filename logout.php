<?php
/* 
【機能】
	セッション情報を削除しログイン画面に遷移する。
*/
//①セッションを開始する。
session_start();
//②セッションを削除する。
session_destroy();
//③ログイン画面へ遷移する。
header('Location:  ./login.php');

?>

<!--以下html文のhrefの処理の場合はログアウト後のページを表示させてから任意でログイン画面へ遷移させる-->
<!--
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>ログアウト</title>
		<link rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>
		<font size = '5'>ログアウトしました</font>
		</h1>
		<p><a href = 'login.php'>ログインページに戻る</a></p>
	</body>
</html>
-->