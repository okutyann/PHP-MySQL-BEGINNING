<?php
// require→外部のファイルを読み込む
require('intax.php');
$price = 240;
$price_tax = intax($price);
echo $price_tax;
