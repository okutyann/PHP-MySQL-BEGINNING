<?php
$zip = '123-4567';
//   /→正規表現ですよっていう意味（正規表現を使うときはこの中で使う）
//  \A \z→これでセット　これをつけたところの前に何もないという意味
//  \d{3}→数字で3文字 
// preg_match→（）と一致しているかどうか確認
if (preg_match("/\A\d{3}[-]\d{4}\z/",$zip)){
    echo '郵便番号：〒'.$zip;
} else {
    echo '※郵便番号が正しくありません。';
}
?>