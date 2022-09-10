<?php
$age = '２３';
// mb_convert_kana = 半角文字列から全角文字列、その逆もやれる
// n→「全角」数字を「半角」に変換
// r→「全角」英字を「半角」に変換　R→「半角」英字を「全角」に変換　
$age = mb_convert_kana($age,'n','UTF-8');
if(is_numeric($age)){
    echo $age . '歳です。';
}else{
    echo '※数字で入力してください。';
}
?>