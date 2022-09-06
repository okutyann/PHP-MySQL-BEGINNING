<?php
// ディレクトリがないと作れない
$success = file_put_contents('data/new.txt','ホームページをリニューアルしました。');

if($success){
    echo 'ファイルの書き込みが完了いたしました。';
}else{
    echo 'ファイルの書き込みが失敗しました。';
}
?>