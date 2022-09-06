<?php
// 変数に入れて使う場合
$news = file_get_contents('data/new.txt');
echo $news;

// ファイルの追記
$news = $news . "<br>追加のニュースです。";
$success = file_put_contents('data/new.txt',$news);
if($success){
    echo 'ファイルの書き込みが完了いたしました。';
}else{
    echo 'ファイルの書き込みが失敗しました。';
}

// 画面に表示するだけならこちらを使う
// readfile('data/new.txt');
?>