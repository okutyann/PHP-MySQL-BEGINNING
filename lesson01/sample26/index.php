<?php
$value = '変数に保存した値です。';
setcookie(
    'message',
    'cookieに保存した値です。',
    // time()現在の時刻
    //  60 * 60 * 24 + 14 → 60秒×60分×24時間×14日間
    time() + 60 * 60 * 24 * 14
);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson26</title>
</head>

<body>
    <a href="page02.php">２ページ目へ</a>
</body>

</html>