<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル20</title>
</head>
<body>
    <!-- htmlspecialchars→JavaScriptを入れても全て文字として受け取ってくれる -->
    <!-- $_REQUEST→getでもpostでも受け取る
    $_GETだとURLを加工することで値を変更できてしまうためmethod=postの場合は$_POSTを使用する -->
    <?php if(!empty($_REQUEST['my_name'])): ?> 
      <p>お名前：<?php echo htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES); ?></p>
    <?php endif; ?>
</body>
</html>