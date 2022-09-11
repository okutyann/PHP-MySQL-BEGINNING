<?php
$file = $_FILES['picture'];
// ファイルの形式をjpegかpngのみ
if ($file['type'] === 'image/jpeg' || $file['type'] === 'image/png') {
    $path = 'images/' . $file['name'];
    // var_dump 確認、表示する
    // var_dump($file);
    $success = move_uploaded_file($file['tmp_name'], $path);

    if ($success) {
        echo '成功しました。';
    } else {
        echo '失敗しました。';
    }
} else {
    echo 'ファイルが不正です。';
}
