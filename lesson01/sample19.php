<?php
$jsonsample = [
    "title" => "jsonサンプル",
    "items" => [
        "りんご",
        "みかん"
    ]
];
// json_encode→配列にする
// JSON_UNESCAPED_UNICODE→日本語に変換してくれる
$json = json_encode($jsonsample,JSON_UNESCAPED_UNICODE);
echo $json;
file_put_contents('json_sample.json',$json);
?>