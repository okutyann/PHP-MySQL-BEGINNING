<?php 
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>

<?php if ($time < 21): ?>
    <p>※営業時間外です。</p>
<?php else: ?>
    <p>ようこそ</p>
<?php endif; ?>

<?php 
$s = '喧嘩中';
if ($s !== ''):
    echo '＄sには文字が入っています。';
endif;
if ($s):
    echo '＄sには文字が入っています。';
endif;

$Y = 0;
if($Y !== 0):
    echo '$Yは0じゃないです。';
endif;
if($Y):
    echo '$Tは0ではないです。';
endif;

$X = 0;
if($X === 0):
    echo '$Xは0です。';
endif;
if(!$X):
    echo '$Xは0です。';
endif;
?>

