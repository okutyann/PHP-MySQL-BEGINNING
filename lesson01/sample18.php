<?php
$file = file_get_contents('feed.json');
// json_decode→分解する（JavaScriptで読みやすい形にする）
$json = json_decode($file);
foreach($json -> items as $item):
?>
・<a href="<?php echo $item -> url; ?>"><?php echo $item -> title; ?><br></a>
<?php endforeach; ?>