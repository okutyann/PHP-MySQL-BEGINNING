<?php
// セッションを使うときに使う
session_start();
// セッションのIDを使いまわされたら意味ないので毎回変わる
session_regenerate_id();
// CookieにsessionIDとして保存するためセキュリティ面で安心
$_SESSION['message'] = 'セッションに保存した値です。';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson27</title>
</head>

<body>
    <a href="page02.php">２ページ目へ</a>
</body>

</html>